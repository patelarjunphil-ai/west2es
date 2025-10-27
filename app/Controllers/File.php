<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FileModel;
use App\Models\FileCategoryModel;
use App\Models\UserModel;

class File extends BaseController
{
    public function index($category_slug)
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }

        $fileCategoryModel = new FileCategoryModel();
        $fileModel = new FileModel();
        $userModel = new UserModel();

        $category = $fileCategoryModel->where('name', $category_slug)->first();

        if (!$category) {
            // Handle category not found
            return redirect()->to('/dashboard')->with('error', 'File category not found.');
        }

        $files = $fileModel
            ->select('files.*, user_data.first_name')
            ->join('user_data', 'user_data.id_no = files.user_id')
            ->where('category_id', $category['id'])
            ->findAll();

        $data = [
            'files' => $files,
            'category_name' => ucfirst(str_replace('_', ' ', $category_slug)),
            'category_id' => $category['id'],
            'currentPage' => $category_slug . '_files',
        ];

        return view('files/index', $data);
    }

    public function upload()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'You must be logged in to upload files.']);
        }

        $file = $this->request->getFile('fileInput');
        $fileName = $this->request->getPost('fileName');
        $categoryId = $this->request->getPost('category_id');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newName);

            $fileModel = new FileModel();
            $fileModel->save([
                'user_id' => $session->get('user_id'),
                'category_id' => $categoryId,
                'filename' => $fileName,
                'file_path' => $newName,
                'file_size' => $file->getSize('kb') . ' KB',
            ]);

            return $this->response->setJSON(['status' => 'success', 'message' => 'File uploaded successfully.']);
        }

        return $this->response->setJSON(['status' => 'error', 'message' => 'File upload failed.']);
    }

    public function download($id)
    {
        // Placeholder for download logic
        return $this->response->setJSON(['status' => 'info', 'message' => 'Download functionality not yet implemented.']);
    }

    public function edit($id)
    {
        // Placeholder for edit logic
        return $this->response->setJSON(['status' => 'info', 'message' => 'Edit functionality not yet implemented.']);
    }

    public function delete($id)
    {
        // Placeholder for delete logic
        return $this->response->setJSON(['status' => 'info', 'message' => 'Delete functionality not yet implemented.']);
    }
}
