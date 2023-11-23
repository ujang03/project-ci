<?php

function is_logged_in()
{
    $ci=get_instance();
    $email = $ci->session->userdata('email');
    $role =  $ci->session->userdata('role_id');

    // if(!$email)
    // {
    //     redirect('auth');
    // }
}
?>