<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function physicianBilling()
    {
        $data = [];
        $data["heading"] = "Billing Solution";
        $data["breadcrumb"] = "Physician Billing";
        return view('sites.billing.physician_billing', $data);
    }

    public function emergencyRoom()
    {
        $data = [];
        $data["heading"] = "Billing Solution";
        $data["breadcrumb"] = "Freestanding Emergency Room";
        return view('sites.billing.emergency_room', $data);
    }

    public function urgentCare()
    {
        $data = [];
        $data["heading"] = "Billing Solution";
        $data["breadcrumb"] = "Urgent Care";
        return view("sites.billing.urgent_care", $data);
    }

    public function laboratory()
    {
        $data = [];
        $data["heading"] = "Billing Solution";
        $data["breadcrumb"] = "Laboratory";
        return view("sites.billing.laboratory", $data);
    }

    public function surgicalCenter()
    {
        $data = [];
        $data["heading"] = "Billing Solution";
        $data["breadcrumb"] = "Ambulatory Surgical Center";
        return view("sites.billing.surgical_center", $data);
    }

    public function microHospitals()
    {
        $data = [];
        $data["heading"] = "Billing Solution";
        $data["breadcrumb"] = "Micro Hospitals";
        return view("sites.billing.macro_hospital", $data);
    }
}
