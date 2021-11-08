<?php

function indonesian_date_format($date)
{
    return date('d-m-Y', strtotime($date));
}

function get_educational_guidance_donation_transaction_status_paid($status)
{
    return $status === 1 ? 'Lunas' : 'Belum Lunas';
}

function get_educational_guidance_donation_transaction_status_paid_by_string($string)
{
    return strtolower($string) === 'lunas' ? 1 : 0;
}
