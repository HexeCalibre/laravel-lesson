<?php

namespace App\Repositories;

use App\Models\Employee;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    public function all()
    {
        return Employee::paginate(10);
    }

    public function update(array $employeeData, Employee $employee)
    {
        $employee->update($employeeData);
    }

    public function store(array $employeeData)
    {
        Employee::create($employeeData);
    }

    public function destroy($id)
    {
        Employee::destroy($id);
    }
}
