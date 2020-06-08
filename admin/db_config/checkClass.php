<?php

class Check {

    //public function pageLoc($loc,$page) {
    public function pageLoc($cPage, $loc, $route, $action) {

        if (isset($route)) {
            $location = 'auth/route_pages/' . $route;
        } else {
            if ($loc == 'or') {
                $location = 'auth/reports/outbound/' . $cPage;
            } elseif ($loc == 'ivr') {
                $location = 'auth/reports/ivr/' . $cPage;
            } elseif ($loc == 'qr') {
                $location = 'auth/reports/queue/' . $cPage;
            } elseif ($loc == 'ar') {
                $location = 'auth/reports/agent/' . $cPage;
            } elseif ($loc == 'cr') {
                $location = 'auth/reports/call/' . $cPage;
            } else {
                $location = 'auth/reports/default/' . $cPage;
            }
        }
        return $location;
    }

}

?>