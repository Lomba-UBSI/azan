<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class NotifHelper
{
    public static function createAlert($status, $message)
    {
        if ($status == 'success') {
            $color = 'success';
            $title = "Berhasil";
        } elseif ($status == 'identity-upload') {
            $color = 'success';
            $title = 'Informasi';
        } elseif ($status == 'info') {
            $color = 'info';
            $title = "Informasi";
        } elseif ($status == 'warning') {
            $color = 'warning';
            $title = "Perhatian";
        } else {
            $color = 'danger';
            $title = "Gagal";
        }

        $alert = <<<HTML
            <!--begin::Alert-->
            <div class="alert alert-$color alert-dismissible fade show" role="alert">
                <strong>$title</strong> $message
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--end::Alert-->
        HTML;
        return $alert;
    }
}
