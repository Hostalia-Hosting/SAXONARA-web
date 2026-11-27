<?php
// 1. DETECTAR L'IDIOMA DEFINIT A LA PÀGINA (<html lang="...">)
$allowed_langs = ['es', 'ca', 'en', 'fr'];
$lang = 'es';

if (!empty($_SERVER['SCRIPT_FILENAME']) && is_readable($_SERVER['SCRIPT_FILENAME'])) {
    $source = file_get_contents($_SERVER['SCRIPT_FILENAME']);
    if (preg_match('/<html[^>]*\blang=["\']?(es|ca|en|fr)["\']?/i', $source, $match)) {
        $detected = strtolower($match[1]);
        if (in_array($detected, $allowed_langs, true)) {
            $lang = $detected;
        }
    }
}

// 2. CONFIGURACIÓ GLOBAL DE WHATSAPP & MAILTO (SAXONARA)
$phone_number = "34625171701";
$email_address = "ara@saxonara.com";

switch ($lang) {
    case 'ca':
        $wa_text = "Hola! He vist la web de SAXONARA i m'agradaria consultar disponibilitat i pressupost per a un esdeveniment.\n\nData:\nPoblació / Espai:\nTipus d'esdeveniment:";
        $email_subject = "Consulta de disponibilitat i pressupost - SAXONARA";
        $email_body = "Hola!\n\nHe vist la web de SAXONARA i m'agradaria consultar disponibilitat i pressupost per a un esdeveniment.\n\nData:\nPoblació / Espai:\nTipus d'esdeveniment:\n";
        break;

    case 'en':
        $wa_text = "Hello! I visited the SAXONARA website and would like to check availability and rates for an event.\n\nDate:\nLocation / Venue:\nEvent type:";
        $email_subject = "Availability & Quote Inquiry - SAXONARA";
        $email_body = "Hello!\n\nI visited the SAXONARA website and would like to check availability and rates for an event.\n\nDate:\nLocation / Venue:\nEvent type:\n";
        break;

    case 'fr':
        $wa_text = "Bonjour ! J'ai visité le site de SAXONARA et j'aimerais vérifier vos disponibilités et tarifs pour un événement.\n\nDate :\nLieu :\nType d'événement :";
        $email_subject = "Demande de disponibilité et devis - SAXONARA";
        $email_body = "Bonjour !\n\nJ'ai visité le site de SAXONARA et j'aimerais vérifier vos disponibilités et tarifs pour un événement.\n\nDate :\nLieu :\nType d'événement :\n";
        break;

    case 'es':
    default:
        $wa_text = "¡Hola! He visto la web de SAXONARA y me gustaría consultar disponibilidad y presupuesto para un evento.\n\nFecha:\nLugar / Población:\nTipo de evento:";
        $email_subject = "Consulta de disponibilidad y presupuesto - SAXONARA";
        $email_body = "¡Hola!\n\nHe visto la web de SAXONARA y me gustaría consultar disponibilidad y presupuesto para un evento.\n\nFecha:\nLugar / Población:\nTipo de evento:\n";
        break;
}

// 3. GENERACIÓ DE LES URLs
$wa_url = "https://wa.me/" . $phone_number . "?text=" . rawurlencode($wa_text);
$mailto_url = "mailto:" . $email_address . "?subject=" . rawurlencode($email_subject) . "&body=" . rawurlencode($email_body);
?>