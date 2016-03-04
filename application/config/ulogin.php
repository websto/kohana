<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
    // ��������� ��������: small, panel, window
    'type' 			=> 'small',

    // �� ����� ����� ����� POST-������ �� uLogin
    'redirect_uri' 	=>	URL::site(NULL, TRUE).'ulogin/create',

    // �������, ��������� �����
    'providers'		=> array(
        'vkontakte',
        'facebook',
        'twitter',
        'google',
        'odnoklassniki',
    ),

    // ��������� ��� ���������
    'hidden' 		=> array(
        'mailru',
        'livejournal',
        'openid'
    ),

    // ��� ���� ������������ ��� ���� username � ������� users
    'username' 		=> array (
        'first_name',
        'last_name',
    ),

    // ������������ ����
    'fields' 		=> array(
        'email',
    ),

    // �������������� ����
    'optional'		=> array(),
);
