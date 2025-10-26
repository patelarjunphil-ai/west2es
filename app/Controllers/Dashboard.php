<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\FileModel;
use CodeIgniter\Database\Config;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }

        $db = Config::connect();
        $userModel = new UserModel();

        $data = [
            'pendingUsersCount' => $userModel->where('status', 'pending')->countAllResults(),
            'totalUsers' => $userModel->countAllResults(),
            'pendingFilesCount' => 0, // Placeholder
            'notificationCount' => 0, // Placeholder
            'totalFiles' => $db->table('files')->countAllResults(),
            'totalFilesVersions' => $db->table('files')->countAllResults(),
            'totalEvents' => 0, // Placeholder
            'currentPage' => 'dashboard-overview.php',
        ];

        return view('dashboard/index', $data);
    }
}
