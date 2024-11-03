<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return User::all()->map(function ($user) {
            return [
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role,
                'phone' => $user->phone,
                'created_at' => $user->created_at,
            ];
        });
    }

    public function headings(): array
    {
        return [

            'Name',
            'Email',
            'Role',
            'Phone',
            'Created At',
        ];
    }
}
