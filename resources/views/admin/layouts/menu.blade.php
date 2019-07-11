<ul class="nav">
    @php
        Menu::item(['name' => 'หน้าหลัก', 'icon' => 'icon-home', 'link' => route('admin.home.index') ]);
        Menu::group($name = 'แผนยุทธศาสตร์', $icon = 'icon-grid', $items = [
            ['name' => 'แผนยุทธศาสตร์ชาติ 20 ปี', 'icon' => 'icon-flag', 'link' => route('admin.nationstrategy.index') ],
            ['name' => 'แผนยุทธศาสตร์ทั้งหมด', 'icon' => 'icon-flag', 'link' => route('admin.plan.index') ],
            ['name' => 'เชื่อมโยงแผนยุทธศาสตร์', 'icon' => 'icon-link', 'link' => route('admin.relation.index') ],
        ]);
        Menu::item(['name' => 'โครงการ', 'icon' => 'icon-note', 'link' => '#' ]);
        Menu::group($name = 'จัดการฐานข้อมูล', $icon = 'icon-layers', $items = [
            ['name' => 'เขตตรวจราชการ', 'icon' => 'icon-map', 'link' => '#' ],
            ['name' => 'จังหวัด', 'icon' => 'icon-globe-alt', 'link' => '#' ],
            ['name' => 'หน่วยงาน', 'icon' => 'icon-briefcase', 'link' => '#' ],
        ]);
        Menu::group($name = 'บัญชีผู้ใช้งาน', $icon = 'icon-settings', $items = [
            ['name' => 'ผู้ดูแลระบบ', 'icon' => 'icon-people', 'link' => route('admin.secret.index'), 'role' => [1] ],
            ['name' => 'ผู้ใช้งานระบบ', 'icon' => 'icon-people', 'link' => route('admin.user.index') ],
        ]);
        Menu::item(['name' => 'สถิติการเข้าใช้งาน', 'icon' => 'icon-graph', 'link' => route('admin.statistic.index') ]);
    @endphp
</ul>
