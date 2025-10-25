<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo json_encode(['status' => 'error', 'message' => 'Unauthorized access.']);
    exit;
}

require_once 'db_connection.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid faculty ID.']);
    exit;
}

$facultyId = intval($_GET['id']);
$startTime = microtime(true);

try {
    // Single optimized query with LEFT JOIN
    $stmt = $pdo->prepare("
        SELECT 
            u.deped_id_no, u.last_name, u.first_name, u.middle_name, u.email, u.status,
            ud.suffix, ud.date_of_birth, ud.birthplace, ud.sex, ud.position, ud.contact_no, 
            ud.personal_gmail_account, ud.bachelors_degree, ud.post_graduate, ud.major, 
            ud.employee_no, ud.plantilla_no, ud.philhealth_no, ud.bp_no, ud.pagibig_no, 
            ud.tin_no, ud.prc_no, ud.prc_validity_date, ud.phlisys_id_no, ud.salary_grade, 
            ud.current_step_based_on_payslip, ud.date_of_first_appointment, 
            ud.date_of_latest_promotion, ud.first_day_of_service, ud.retirement_day
        FROM user_data u
        LEFT JOIN user_data_details ud ON u.id_no = ud.user_id
        WHERE u.id_no = ?
    ");
    
    $queryStart = microtime(true);
    $stmt->execute([$facultyId]);
    $queryTime = microtime(true) - $queryStart;
    
    $details = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$details) {
        echo json_encode(['status' => 'error', 'message' => 'Faculty member not found.']);
        exit;
    }

    $totalTime = microtime(true) - $startTime;
    
    // Add timing info to response for debugging
    $response = [
        'status' => 'success', 
        'details' => $details,
        'debug' => [
            'query_time' => round($queryTime * 1000, 2) . 'ms',
            'total_time' => round($totalTime * 1000, 2) . 'ms'
        ]
    ];
    
    echo json_encode($response);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()]);
}
