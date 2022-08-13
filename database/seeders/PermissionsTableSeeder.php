<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'post_create',
            ],
            [
                'id'    => 18,
                'title' => 'post_edit',
            ],
            [
                'id'    => 19,
                'title' => 'post_show',
            ],
            [
                'id'    => 20,
                'title' => 'post_delete',
            ],
            [
                'id'    => 21,
                'title' => 'post_access',
            ],
            [
                'id'    => 22,
                'title' => 'category_create',
            ],
            [
                'id'    => 23,
                'title' => 'category_edit',
            ],
            [
                'id'    => 24,
                'title' => 'category_show',
            ],
            [
                'id'    => 25,
                'title' => 'category_delete',
            ],
            [
                'id'    => 26,
                'title' => 'category_access',
            ],
            [
                'id'    => 27,
                'title' => 'tag_create',
            ],
            [
                'id'    => 28,
                'title' => 'tag_edit',
            ],
            [
                'id'    => 29,
                'title' => 'tag_show',
            ],
            [
                'id'    => 30,
                'title' => 'tag_delete',
            ],
            [
                'id'    => 31,
                'title' => 'tag_access',
            ],
            [
                'id'    => 32,
                'title' => 'blogs_management_access',
            ],
            [
                'id'    => 33,
                'title' => 'service_create',
            ],
            [
                'id'    => 34,
                'title' => 'service_edit',
            ],
            [
                'id'    => 35,
                'title' => 'service_show',
            ],
            [
                'id'    => 36,
                'title' => 'service_delete',
            ],
            [
                'id'    => 37,
                'title' => 'service_access',
            ],
            [
                'id'    => 38,
                'title' => 'contact_create',
            ],
            [
                'id'    => 39,
                'title' => 'contact_show',
            ],
            [
                'id'    => 40,
                'title' => 'contact_access',
            ],
            [
                'id'    => 41,
                'title' => 'project_create',
            ],
            [
                'id'    => 42,
                'title' => 'project_edit',
            ],
            [
                'id'    => 43,
                'title' => 'project_show',
            ],
            [
                'id'    => 44,
                'title' => 'project_delete',
            ],
            [
                'id'    => 45,
                'title' => 'project_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
