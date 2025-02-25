<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>نظام إدارة المدرسة</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.rtl.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <style>
        :root {
            --primary: #4776e6;
            --secondary: #8e54e9;
            --accent1: #ff6b6b;
            --accent2: #4ecdc4;
            --accent3: #ffd93d;
            --accent4: #6c5ce7;
        }

        body {
            background-color: #f8f9fe;
            font-family: "Cairo", sans-serif;
        }

        .sidebar {
            min-height: 100vh;
            background: linear-gradient(135deg,
                    var(--primary),
                    var(--secondary));
            border-radius: 0 20px 20px 0;
            padding: 20px;
            box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
        }

        .sidebar-brand {
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            margin-bottom: 10px;
            border-radius: 12px;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            transform: translateX(-5px);
        }

        .nav-link.active {
            background: white;
            color: var(--primary);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .content {
            padding: 30px;
        }

        .stats-card {
            background: white;
            border-radius: 18px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            border: none;
        }

        .stats-card:hover {
            transform: translateY(-5px);
        }

        .stats-card.primary {
            background: linear-gradient(45deg,
                    var(--primary),
                    var(--secondary));
            color: white;
        }

        .stats-card.accent1 {
            background: linear-gradient(45deg, var(--accent1), #ff8c8c);
            color: white;
        }

        .stats-card.accent2 {
            background: linear-gradient(45deg, var(--accent2), #6be7de);
            color: white;
        }

        .stats-card.accent3 {
            background: linear-gradient(45deg, var(--accent3), #ffe584);
            color: #2d3436;
        }

        .stats-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            opacity: 0.8;
        }

        .table-container {
            background: white;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-top: 20px;
        }

        .table {
            border-collapse: separate;
            border-spacing: 0 8px;
        }

        .table thead th {
            border: none;
            color: #6c757d;
            font-weight: 600;
            padding: 15px;
        }

        .table tbody tr {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
            border-radius: 10px;
            transition: transform 0.2s ease;
        }

        .table tbody tr:hover {
            transform: scale(1.01);
        }

        .table tbody td {
            border: none;
            padding: 15px;
            background: #f8f9fa;
            vertical-align: middle;
        }

        .table tbody tr td:first-child {
            border-radius: 10px 0 0 10px;
        }

        .table tbody tr td:last-child {
            border-radius: 0 10px 10px 0;
        }

        .page-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #2d3436;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }

        .page-title::after {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(to right,
                    var(--primary),
                    var(--secondary));
            border-radius: 2px;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            margin: 10px 0;
        }

        .stat-label {
            font-size: 1rem;
            opacity: 0.9;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .page {
            animation: fadeIn 0.5s ease;
        }

        .status-badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .status-active {
            background-color: rgba(46, 213, 115, 0.15);
            color: #2ed573;
            display: inline-block;
            margin: 10px 0;
        }

        .status-pending {
            background-color: rgba(255, 171, 0, 0.15);
            color: #ffab00;
            display: inline-block;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar p-0">
                <div class="sidebar-brand text-white text-center">
                    <h4 class="mb-0">🎓 نظام إدارة المدرسة</h4>
                </div>
                <nav class="nav flex-column mt-4">
                    <a class="nav-link" href="#" data-page="dashboard">
                        <i class="fas fa-home me-2"></i>لوحة التحكم
                    </a>
                    <a class="nav-link" href="#" data-page="students">
                        <i class="fas fa-user-graduate me-2"></i>الطلاب
                    </a>
                    <a class="nav-link" href="#" data-page="parents">
                        <i class="fas fa-users me-2"></i>أولياء الأمور
                    </a>
                    <a class="nav-link" href="#" data-page="teachers">
                        <i class="fas fa-chalkboard-teacher me-2"></i>المعلمون
                    </a>
                    <a class="nav-link" href="#" data-page="classrooms">
                        <i class="fas fa-school me-2"></i>الفصول الدراسية
                    </a>
                    <a class="nav-link" href="#" data-page="payments">
                        <i class="fas fa-money-check-alt me-2"></i>المدفوعات
                    </a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 content">
                <!-- Dashboard Page -->
                <div id="dashboard" class="page">
                    <h2 class="page-title">لوحة التحكم</h2>
                    <a href="/">سحاب كود</a>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="stats-card primary">
                                <i class="fas fa-user-graduate stats-icon"></i>
                                <div class="stat-label">إجمالي الطلاب</div>
                                <div class="stat-value">450</div>
                                <div class="stat-change">
                                    +5% عن الشهر السابق
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-card accent1">
                                <i class="fas fa-chalkboard-teacher stats-icon"></i>
                                <div class="stat-label">
                                    إجمالي المعلمين
                                </div>
                                <div class="stat-value">32</div>
                                <div class="stat-change">+2 معلم جديد</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-card accent2">
                                <i class="fas fa-school stats-icon"></i>
                                <div class="stat-label">
                                    الفصول الدراسية
                                </div>
                                <div class="stat-value">15</div>
                                <div class="stat-change">
                                    جميع الفصول نشطة
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-card accent3">
                                <i class="fas fa-money-bill-wave stats-icon"></i>
                                <div class="stat-label">
                                    المدفوعات الشهرية
                                </div>
                                <div class="stat-value">₪75,000</div>
                                <div class="stat-change">
                                    +12% عن الشهر السابق
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Replace the existing activity table in the dashboard page with this enhanced version -->
                    <div class="table-container">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="mb-0">آخر النشاطات والإشعارات</h5>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                    id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-filter me-2"></i>تصفية
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                                    <li>
                                        <a class="dropdown-item active" href="#">جميع النشاطات</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">الطلاب</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">المدفوعات</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">الحضور</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">الدرجات</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="activity-feed">
                            <!-- Today's Activities -->
                            <div class="activity-date mb-3">
                                <h6 class="text-muted mb-3">اليوم</h6>

                                <div class="activity-item">
                                    <div class="activity-content">
                                        <div class="activity-icon bg-primary-subtle">
                                            <i class="fas fa-user-graduate text-primary"></i>
                                        </div>
                                        <div class="activity-details">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="mb-1">
                                                    تسجيل طالب جديد
                                                </h6>
                                                <small class="text-muted">09:45</small>
                                            </div>
                                            <p class="mb-0">
                                                تم تسجيل الطالب "محمد أحمد"
                                                في الصف العاشر
                                            </p>
                                            <span class="status-badge status-active">مكتمل</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-item">
                                    <div class="activity-content">
                                        <div class="activity-icon bg-success-subtle">
                                            <i class="fas fa-money-bill-wave text-success"></i>
                                        </div>
                                        <div class="activity-details">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="mb-1">
                                                    دفع رسوم دراسية
                                                </h6>
                                                <small class="text-muted">10:30</small>
                                            </div>
                                            <p class="mb-0">
                                                تم استلام دفعة من ولي أمر
                                                الطالب "يوسف خالد"
                                            </p>
                                            <span class="status-badge status-pending">قيد المعالجة</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-item">
                                    <div class="activity-content">
                                        <div class="activity-icon bg-warning-subtle">
                                            <i class="fas fa-clock text-warning"></i>
                                        </div>
                                        <div class="activity-details">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="mb-1">
                                                    تسجيل الحضور
                                                </h6>
                                                <small class="text-muted">11:15</small>
                                            </div>
                                            <p class="mb-0">
                                                تم تسجيل حضور طلاب الصف
                                                التاسع (أ)
                                            </p>
                                            <span class="status-badge status-active">مكتمل</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-item">
                                    <div class="activity-content">
                                        <div class="activity-icon bg-info-subtle">
                                            <i class="fas fa-book text-info"></i>
                                        </div>
                                        <div class="activity-details">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="mb-1">
                                                    رصد درجات
                                                </h6>
                                                <small class="text-muted">12:00</small>
                                            </div>
                                            <p class="mb-0">
                                                تم رصد درجات اختبار
                                                الرياضيات للصف العاشر
                                            </p>
                                            <span class="status-badge status-active">مكتمل</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Yesterday's Activities -->
                            <div class="activity-date mb-3">
                                <h6 class="text-muted mb-3">الأمس</h6>

                                <div class="activity-item">
                                    <div class="activity-content">
                                        <div class="activity-icon bg-danger-subtle">
                                            <i class="fas fa-bullhorn text-danger"></i>
                                        </div>
                                        <div class="activity-details">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="mb-1">
                                                    إشعار جديد
                                                </h6>
                                                <small class="text-muted">14:30</small>
                                            </div>
                                            <p class="mb-0">
                                                تم إرسال إشعار لأولياء
                                                الأمور حول الاجتماع المدرسي
                                            </p>
                                            <span class="status-badge status-active">تم الإرسال</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-item">
                                    <div class="activity-content">
                                        <div class="activity-icon bg-purple-subtle">
                                            <i class="fas fa-calendar-check text-purple"></i>
                                        </div>
                                        <div class="activity-details">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="mb-1">
                                                    موعد اجتماع
                                                </h6>
                                                <small class="text-muted">15:45</small>
                                            </div>
                                            <p class="mb-0">
                                                تم تحديد موعد اجتماع مجلس
                                                الآباء القادم
                                            </p>
                                            <span class="status-badge status-pending">قيد التأكيد</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Load More Button -->
                        <div class="text-center mt-4">
                            <button class="btn btn-outline-primary">
                                عرض المزيد من النشاطات
                                <i class="fas fa-chevron-down ms-2"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Add these new styles to your existing CSS -->
                    <style>
                        .activity-feed {
                            position: relative;
                        }

                        .activity-date {
                            position: relative;
                        }

                        .activity-item {
                            padding: 1rem;
                            border-radius: 12px;
                            background: white;
                            margin-bottom: 1rem;
                            transition: transform 0.2s ease,
                                box-shadow 0.2s ease;
                            border: 1px solid rgba(0, 0, 0, 0.05);
                        }

                        .activity-item:hover {
                            transform: translateY(-2px);
                            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
                        }

                        .activity-content {
                            display: flex;
                            gap: 1rem;
                            align-items: flex-start;
                        }

                        .activity-icon {
                            width: 40px;
                            height: 40px;
                            border-radius: 10px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            font-size: 1.2rem;
                            flex-shrink: 0;
                        }

                        .activity-details {
                            flex-grow: 1;
                        }

                        .activity-details p {
                            color: #6c757d;
                            font-size: 0.9rem;
                        }

                        .bg-primary-subtle {
                            background-color: rgba(71, 118, 230, 0.1);
                        }

                        .bg-success-subtle {
                            background-color: rgba(46, 213, 115, 0.1);
                        }

                        .bg-warning-subtle {
                            background-color: rgba(255, 171, 0, 0.1);
                        }

                        .bg-info-subtle {
                            background-color: rgba(70, 163, 255, 0.1);
                        }

                        .bg-danger-subtle {
                            background-color: rgba(255, 107, 107, 0.1);
                        }

                        .bg-purple-subtle {
                            background-color: rgba(110, 92, 231, 0.1);
                        }

                        .text-purple {
                            color: #6c5ce7;
                        }

                        .dropdown-menu {
                            border-radius: 12px;
                            border: none;
                            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                            padding: 0.5rem;
                        }

                        .dropdown-item {
                            padding: 0.6rem 1rem;
                            border-radius: 8px;
                            transition: all 0.2s ease;
                        }

                        .dropdown-item:hover,
                        .dropdown-item.active {
                            background: rgba(71, 118, 230, 0.1);
                            color: var(--primary);
                        }

                        .btn-outline-primary {
                            border-color: rgba(71, 118, 230, 0.3);
                            color: var(--primary);
                        }

                        .btn-outline-primary:hover {
                            background: rgba(71, 118, 230, 0.1);
                            border-color: var(--primary);
                            color: var(--primary);
                        }
                    </style>
                </div>

                <!-- Students Page -->
                <div id="students" class="page d-none">
                    <h2 class="page-title">الطلاب</h2>
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم الطالب</th>
                                    <th>الصف</th>
                                    <th>رقم الهاتف</th>
                                    <th>العنوان</th>
                                    <th>الحالة</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>أحمد محمد خالد</td>
                                    <td>الصف العاشر</td>
                                    <td>0599123456</td>
                                    <td>الكويت - صباح السالم</td>
                                    <td>
                                        <span class="status-badge status-active">نشط</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>يوسف سامي عمر</td>
                                    <td>الصف التاسع</td>
                                    <td>0599789012</td>
                                    <td>الكويت - مبارك الكبير</td>
                                    <td>
                                        <span class="status-badge status-active">نشط</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Parents Page -->
                <div id="parents" class="page d-none">
                    <h2 class="page-title">أولياء الأمور</h2>
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم ولي الأمر</th>
                                    <th>اسم الطالب</th>
                                    <th>رقم الهاتف</th>
                                    <th>البريد الإلكتروني</th>
                                    <th>الحالة</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>محمد خالد أحمد</td>
                                    <td>أحمد محمد خالد</td>
                                    <td>0599123457</td>
                                    <td>mohammad@example.com</td>
                                    <td>
                                        <span class="status-badge status-active">نشط</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Teachers Page -->
                <div id="teachers" class="page d-none">
                    <h2 class="page-title">المعلمون</h2>
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم المعلم</th>
                                    <th>التخصص</th>
                                    <th>رقم الهاتف</th>
                                    <th>البريد الإلكتروني</th>
                                    <th>الحالة</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>عبد الرحمن محمود</td>
                                    <td>الرياضيات</td>
                                    <td>0599111222</td>
                                    <td>abdulrahman@example.com</td>
                                    <td>
                                        <span class="status-badge status-active">نشط</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>سميرة أحمد</td>
                                    <td>اللغة العربية</td>
                                    <td>0599333444</td>
                                    <td>samira@example.com</td>
                                    <td>
                                        <span class="status-badge status-active">نشط</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>خالد محمود</td>
                                    <td>العلوم</td>
                                    <td>0599555666</td>
                                    <td>khaled@example.com</td>
                                    <td>
                                        <span class="status-badge status-active">نشط</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Classrooms Page -->
                <div id="classrooms" class="page d-none">
                    <h2 class="page-title">الفصول الدراسية</h2>
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الصف</th>
                                    <th>عدد الطلاب</th>
                                    <th>مربي الصف</th>
                                    <th>رقم القاعة</th>
                                    <th>الحالة</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>الصف العاشر أ</td>
                                    <td>30</td>
                                    <td>عبد الرحمن محمود</td>
                                    <td>101</td>
                                    <td>
                                        <span class="status-badge status-active">نشط</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>الصف التاسع ب</td>
                                    <td>28</td>
                                    <td>سميرة أحمد</td>
                                    <td>102</td>
                                    <td>
                                        <span class="status-badge status-active">نشط</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>الصف الثامن أ</td>
                                    <td>25</td>
                                    <td>خالد محمود</td>
                                    <td>103</td>
                                    <td>
                                        <span class="status-badge status-active">نشط</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Add this new payments page right before the closing div of main content -->
                <!-- Payments Page -->
                <div id="payments" class="page d-none">
                    <h2 class="page-title">المدفوعات</h2>

                    <!-- Payment Statistics -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="stats-card primary">
                                <i class="fas fa-money-bill-wave stats-icon"></i>
                                <div class="stat-label">
                                    إجمالي المدفوعات
                                </div>
                                <div class="stat-value">₪250,000</div>
                                <div class="stat-change">هذا الشهر</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-card accent1">
                                <i class="fas fa-clock stats-icon"></i>
                                <div class="stat-label">مدفوعات معلقة</div>
                                <div class="stat-value">₪15,000</div>
                                <div class="stat-change">15 طالب</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-card accent2">
                                <i class="fas fa-check-circle stats-icon"></i>
                                <div class="stat-label">مدفوعات مكتملة</div>
                                <div class="stat-value">₪235,000</div>
                                <div class="stat-change">435 طالب</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-card accent3">
                                <i class="fas fa-percentage stats-icon"></i>
                                <div class="stat-label">نسبة التحصيل</div>
                                <div class="stat-value">94%</div>
                                <div class="stat-change">
                                    +2% عن الشهر السابق
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment History Table -->
                    <div class="table-container">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="mb-0">سجل المدفوعات</h5>
                            <div class="d-flex gap-2">
                                <button class="btn btn-primary">
                                    <i class="fas fa-plus me-2"></i>دفعة
                                    جديدة
                                </button>
                                <button class="btn btn-outline-secondary">
                                    <i class="fas fa-file-export me-2"></i>تصدير التقرير
                                </button>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>رقم الدفعة</th>
                                    <th>اسم الطالب</th>
                                    <th>المبلغ</th>
                                    <th>نوع الدفع</th>
                                    <th>التاريخ</th>
                                    <th>الحالة</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#INV-001</td>
                                    <td>أحمد محمد خالد</td>
                                    <td>₪2,500</td>
                                    <td>
                                        <i class="fas fa-credit-card text-primary me-2"></i>
                                        بطاقة ائتمان
                                    </td>
                                    <td>23/10/2024</td>
                                    <td>
                                        <span class="status-badge status-active">تم الدفع</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#INV-002</td>
                                    <td>يوسف سامي عمر</td>
                                    <td>₪2,500</td>
                                    <td>
                                        <i class="fas fa-money-bill text-success me-2"></i>
                                        نقدي
                                    </td>
                                    <td>22/10/2024</td>
                                    <td>
                                        <span class="status-badge status-active">تم الدفع</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#INV-003</td>
                                    <td>ليلى عبد الرحمن</td>
                                    <td>₪2,500</td>
                                    <td>
                                        <i class="fas fa-university text-info me-2"></i>
                                        تحويل بنكي
                                    </td>
                                    <td>22/10/2024</td>
                                    <td>
                                        <span class="status-badge status-pending">قيد المعالجة</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#INV-004</td>
                                    <td>سارة محمود</td>
                                    <td>₪2,500</td>
                                    <td>
                                        <i class="fas fa-credit-card text-primary me-2"></i>
                                        بطاقة ائتمان
                                    </td>
                                    <td>21/10/2024</td>
                                    <td>
                                        <span class="status-badge status-active">تم الدفع</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Pagination -->
                        <nav aria-label="Page navigation" class="mt-4">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">السابق</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">التالي</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Payment Summary Chart -->
                    <div class="table-container mt-4">
                        <h5 class="mb-4">ملخص المدفوعات الشهرية</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>الشهر</th>
                                            <th>إجمالي المدفوعات</th>
                                            <th>نسبة التحصيل</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>أكتوبر 2024</td>
                                            <td>₪250,000</td>
                                            <td>94%</td>
                                        </tr>
                                        <tr>
                                            <td>سبتمبر 2024</td>
                                            <td>₪245,000</td>
                                            <td>92%</td>
                                        </tr>
                                        <tr>
                                            <td>أغسطس 2024</td>
                                            <td>₪242,000</td>
                                            <td>91%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add these new styles to your existing CSS -->
                <style>
                    .btn {
                        padding: 8px 16px;
                        border-radius: 8px;
                        transition: all 0.3s ease;
                    }

                    .btn-primary {
                        background: linear-gradient(45deg,
                                var(--primary),
                                var(--secondary));
                        border: none;
                    }

                    .btn-primary:hover {
                        transform: translateY(-2px);
                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                    }

                    .btn-outline-secondary {
                        border: 1px solid #dee2e6;
                        color: #6c757d;
                    }

                    .btn-outline-secondary:hover {
                        background: #f8f9fa;
                        border-color: #dee2e6;
                        transform: translateY(-2px);
                    }

                    .pagination {
                        gap: 5px;
                    }

                    .pagination .page-link {
                        border-radius: 8px;
                        border: none;
                        color: var(--primary);
                        padding: 8px 16px;
                    }

                    .pagination .page-item.active .page-link {
                        background: linear-gradient(45deg,
                                var(--primary),
                                var(--secondary));
                    }

                    .payment-type-icon {
                        width: 24px;
                        height: 24px;
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        border-radius: 6px;
                        margin-right: 8px;
                    }
                </style>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Wait for DOM to be fully loaded
            document.addEventListener("DOMContentLoaded", function () {
                // Get all navigation links
                const navLinks = document.querySelectorAll(".nav-link");
                // Get all pages
                const pages = document.querySelectorAll(".page");

                // Function to show a specific page and update navigation
                function showPage(pageId) {
                    // Hide all pages with animation
                    pages.forEach((page) => {
                        page.classList.add("d-none");
                        page.style.opacity = "0";
                    });

                    // Show the selected page
                    const selectedPage = document.getElementById(pageId);
                    if (selectedPage) {
                        selectedPage.classList.remove("d-none");
                        // Trigger reflow for animation
                        selectedPage.offsetHeight;
                        selectedPage.style.opacity = "1";
                    }

                    // Update navigation active states
                    navLinks.forEach((link) => {
                        if (link.getAttribute("data-page") === pageId) {
                            link.classList.add("active");
                        } else {
                            link.classList.remove("active");
                        }
                    });

                    // Update URL hash without scrolling
                    history.pushState(null, null, "#" + pageId);
                }

                // Add click event listeners to all navigation links
                navLinks.forEach((link) => {
                    link.addEventListener("click", (e) => {
                        e.preventDefault();
                        const pageId = link.getAttribute("data-page");
                        showPage(pageId);
                    });
                });

                // Handle initial page load and browser back/forward
                function handleInitialLoad() {
                    let pageId =
                        window.location.hash.replace("#", "") || "dashboard";
                    showPage(pageId);
                }

                // Handle browser back/forward buttons
                window.addEventListener("popstate", handleInitialLoad);

                // Handle initial page load
                handleInitialLoad();

                // Add hover effect to table rows
                document.querySelectorAll("tbody tr").forEach((row) => {
                    row.addEventListener("mouseover", () => {
                        row.style.cursor = "pointer";
                    });
                });
            });
    </script>
</body>

</html>