<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index()
    {
        $a = 1280;
        $b = 2500;

        return $this->addition($a, $b);
    }

    /**
     * 加算
     * @param int $a
     * @param int $b
     * @return int
     */
    private function addition(int $a, int $b): int
    {
        return $a + $b;
    }
}