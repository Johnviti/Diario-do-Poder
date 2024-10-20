<?php
/*
Plugin Name: Diário do Poder
Description: Plugin para adicionar notas de Cláudio Humberto no site e funções personalizadas.
Version: 1.0
Author: John Amorim
*/

if (!defined('ABSPATH')) {
    exit; 
}

function notas_claudio_humberto_shortcode_5() {
    ob_start();

    $id = get_the_ID(); 
    $notas = get_field('notas', $id); 

    if ($notas) {
        echo '<div class="notas-container">';
        
        foreach ($notas as $index => $nota) {
			if ($index >= 5) break;
			
            $nota_id = $index + 1; 
            $titulo = $nota['title'];
            $descricao = $nota['description'];
            $permalink = get_permalink();

            echo '<div id="Nota-' . esc_attr($nota_id) . '" class="entry-block ch-nota Nota-' . esc_attr($nota_id) . '">';
			echo '<div class="Nota">';
            echo '<h3>' . esc_html($titulo) . '</h3>';

            echo '<ul class="social-ch">';
            echo '<li><a aria-label="Facebook compartilhamento Nota" href="https://www.facebook.com/sharer/sharer.php?u=' . esc_url($permalink) . '#Nota-' . esc_attr($nota_id) . '&quote=' . urlencode($titulo . ': ' . $descricao) . '" target="_blank" rel="noopener">';
            echo '<?xml version="1.0"?><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" >    <path d="M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z"/></svg>';
            echo '</a></li>';

            echo '<li><a aria-label="Whatsapp compartilhamento Nota" href="https://api.whatsapp.com/send?text=' . urlencode($titulo . ': ' . $descricao) . ' ' . esc_url($permalink) . '#Nota-' . esc_attr($nota_id) . '" target="_blank" rel="noopener">';
            echo '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><style type="text/css">
	.st0{fill:#ccc;} </style><g><path class="st0" d="M195.1,143.2c-55.8,40.2-68.5,118-28.3,173.8c2.7,3.8,3.2,8.8,1.3,13.1l-14.3,31.6l41.3-11.3
		c1.1-0.3,2.3-0.5,3.5-0.5c2.3,0,4.6,0.6,6.7,1.8c19,11.1,40.7,17,62.7,17v0c26.1,0,51.6-8.2,72.8-23.5
		c55.8-40.2,68.5-118,28.3-173.8S250.9,103,195.1,143.2z M341.9,292.5c-4.6,11.2-16.1,18.5-27.8,20.7c-11.2,2.2-20.4-1.4-30.7-4.8
		c-9.2-3.2-18.1-7.4-26.4-12.5c-16.5-10.2-30.8-23.6-42.3-39.2c-3.5-4.8-6.8-9.7-9.7-14.8c-4-6.7-7.5-13.9-9.3-21.6
		c-0.8-3.2-1.2-6.5-1.2-9.7c-0.1-11.6,4.3-23.2,13.4-30.7c5.3-4.3,13.1-6.2,19.1-2.8c6.5,3.6,9.8,12.8,12.8,19.3
		c2.3,5,4.9,11.7,4,17.3c-0.9,5.7-5.4,10.5-9,14.7c-2.4,2.8-2.8,5.3-0.8,8.3c11.8,19.7,28.3,34,49.7,42.6c2.9,1.2,5.2,0.8,7.1-1.5
		c3.7-4.6,7.3-13.5,13.1-15.9c7.5-3,15.7,1.2,22,5c5.9,3.5,15.7,7.8,17.3,15.1C343.8,285.5,343.3,289.2,341.9,292.5z"/><path class="st0" d="M256,6C118.2,6,6,118.2,6,256s112.2,250,250,250s250-112.1,250-250S393.9,6,256,6z M267.8,395.1
		c-24.8,0-49.2-6.1-71.1-17.8l-63.2,17.3c-3,0.8-6.1,0.6-8.9-0.7c-6.6-3-9.6-10.8-6.5-17.5l23-50.5c-15.8-24.3-24.2-52.8-24.1-81.8
		c0-83.2,67.7-150.9,150.9-150.9c83.2,0,150.9,67.7,150.9,150.9S351,395.1,267.8,395.1z"/>
</g>
</svg>
';
            echo '</a></li>';

            echo '<li><button class="nota-link" data-link="' . esc_html($titulo . ': ' . $descricao . ' - ' . $permalink . '#Nota-' . esc_attr($nota_id)) . '">';
            echo '<?xml version="1.0" encoding="utf-8"?><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.53 8L14 2.47C13.8595 2.32931 13.6688 2.25018 13.47 2.25H11C10.2707 2.25 9.57118 2.53973 9.05546 3.05546C8.53973 3.57118 8.25 4.27065 8.25 5V6.25H7C6.27065 6.25 5.57118 6.53973 5.05546 7.05546C4.53973 7.57118 4.25 8.27065 4.25 9V19C4.25 19.7293 4.53973 20.4288 5.05546 20.9445C5.57118 21.4603 6.27065 21.75 7 21.75H14C14.7293 21.75 15.4288 21.4603 15.9445 20.9445C16.4603 20.4288 16.75 19.7293 16.75 19V17.75H17C17.7293 17.75 18.4288 17.4603 18.9445 16.9445C19.4603 16.4288 19.75 15.7293 19.75 15V8.5C19.7421 8.3116 19.6636 8.13309 19.53 8ZM14.25 4.81L17.19 7.75H14.25V4.81ZM15.25 19C15.25 19.3315 15.1183 19.6495 14.8839 19.8839C14.6495 20.1183 14.3315 20.25 14 20.25H7C6.66848 20.25 6.35054 20.1183 6.11612 19.8839C5.8817 19.6495 5.75 19.3315 5.75 19V9C5.75 8.66848 5.8817 8.35054 6.11612 8.11612C6.35054 7.8817 6.66848 7.75 7 7.75H8.25V15C8.25 15.7293 8.53973 16.4288 9.05546 16.9445C9.57118 17.4603 10.2707 17.75 11 17.75H15.25V19ZM17 16.25H11C10.6685 16.25 10.3505 16.1183 10.1161 15.8839C9.8817 15.6495 9.75 15.3315 9.75 15V5C9.75 4.66848 9.8817 4.35054 10.1161 4.11612C10.3505 3.8817 10.6685 3.75 11 3.75H12.75V8.5C12.7526 8.69811 12.8324 8.88737 12.9725 9.02747C13.1126 9.16756 13.3019 9.24741 13.5 9.25H18.25V15C18.25 15.3315 18.1183 15.6495 17.8839 15.8839C17.6495 16.1183 17.3315 16.25 17 16.25Z" fill="#000000"/></svg>';
            echo '</button></li>';
            echo '</ul>';
			echo '</div>';

            // Descrição da nota
            echo '<p>' . esc_html($descricao) . '</p>';
            echo '</div>';
        }

        echo '</div>';
    } else {
        echo '<p>Nenhuma nota encontrada.</p>';
    }

    return ob_get_clean();
}

add_shortcode('notas_claudio_humberto_5', 'notas_claudio_humberto_shortcode_5');



function notas_claudio_humberto_shortcode_4() {
    ob_start();

    $id = get_the_ID(); 
    $notas = get_field('notas', $id); 

    if ($notas) {
        echo '<div class="notas-container">';
        
        foreach ($notas as $index => $nota) {
			 if ($index < 5 || $index >= 9) continue;
			
            $nota_id = $index + 1; 
            $titulo = $nota['title'];
            $descricao = $nota['description'];
            $permalink = get_permalink();

            echo '<div id="Nota-' . esc_attr($nota_id) . '" class="entry-block ch-nota Nota-' . esc_attr($nota_id) . '">';
			echo '<div class="Nota">';
            echo '<h3>' . esc_html($titulo) . '</h3>';

            echo '<ul class="social-ch">';
            echo '<li><a aria-label="Facebook compartilhamento Nota" href="https://www.facebook.com/sharer/sharer.php?u=' . esc_url($permalink) . '#Nota-' . esc_attr($nota_id) . '&quote=' . urlencode($titulo . ': ' . $descricao) . '" target="_blank" rel="noopener">';
            echo '<?xml version="1.0"?><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" >    <path d="M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z"/></svg>';
            echo '</a></li>';

            echo '<li><a aria-label="Whatsapp compartilhamento Nota" href="https://api.whatsapp.com/send?text=' . urlencode($titulo . ': ' . $descricao) . ' ' . esc_url($permalink) . '#Nota-' . esc_attr($nota_id) . '" target="_blank" rel="noopener">';
            echo '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><style type="text/css">
	.st0{fill:#ccc;} </style><g><path class="st0" d="M195.1,143.2c-55.8,40.2-68.5,118-28.3,173.8c2.7,3.8,3.2,8.8,1.3,13.1l-14.3,31.6l41.3-11.3
		c1.1-0.3,2.3-0.5,3.5-0.5c2.3,0,4.6,0.6,6.7,1.8c19,11.1,40.7,17,62.7,17v0c26.1,0,51.6-8.2,72.8-23.5
		c55.8-40.2,68.5-118,28.3-173.8S250.9,103,195.1,143.2z M341.9,292.5c-4.6,11.2-16.1,18.5-27.8,20.7c-11.2,2.2-20.4-1.4-30.7-4.8
		c-9.2-3.2-18.1-7.4-26.4-12.5c-16.5-10.2-30.8-23.6-42.3-39.2c-3.5-4.8-6.8-9.7-9.7-14.8c-4-6.7-7.5-13.9-9.3-21.6
		c-0.8-3.2-1.2-6.5-1.2-9.7c-0.1-11.6,4.3-23.2,13.4-30.7c5.3-4.3,13.1-6.2,19.1-2.8c6.5,3.6,9.8,12.8,12.8,19.3
		c2.3,5,4.9,11.7,4,17.3c-0.9,5.7-5.4,10.5-9,14.7c-2.4,2.8-2.8,5.3-0.8,8.3c11.8,19.7,28.3,34,49.7,42.6c2.9,1.2,5.2,0.8,7.1-1.5
		c3.7-4.6,7.3-13.5,13.1-15.9c7.5-3,15.7,1.2,22,5c5.9,3.5,15.7,7.8,17.3,15.1C343.8,285.5,343.3,289.2,341.9,292.5z"/><path class="st0" d="M256,6C118.2,6,6,118.2,6,256s112.2,250,250,250s250-112.1,250-250S393.9,6,256,6z M267.8,395.1
		c-24.8,0-49.2-6.1-71.1-17.8l-63.2,17.3c-3,0.8-6.1,0.6-8.9-0.7c-6.6-3-9.6-10.8-6.5-17.5l23-50.5c-15.8-24.3-24.2-52.8-24.1-81.8
		c0-83.2,67.7-150.9,150.9-150.9c83.2,0,150.9,67.7,150.9,150.9S351,395.1,267.8,395.1z"/>
</g>
</svg>
';
            echo '</a></li>';

            echo '<li><button class="nota-link" data-link="' . esc_html($titulo . ': ' . $descricao . ' - ' . $permalink . '#Nota-' . esc_attr($nota_id)) . '">';
            echo '<?xml version="1.0" encoding="utf-8"?><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.53 8L14 2.47C13.8595 2.32931 13.6688 2.25018 13.47 2.25H11C10.2707 2.25 9.57118 2.53973 9.05546 3.05546C8.53973 3.57118 8.25 4.27065 8.25 5V6.25H7C6.27065 6.25 5.57118 6.53973 5.05546 7.05546C4.53973 7.57118 4.25 8.27065 4.25 9V19C4.25 19.7293 4.53973 20.4288 5.05546 20.9445C5.57118 21.4603 6.27065 21.75 7 21.75H14C14.7293 21.75 15.4288 21.4603 15.9445 20.9445C16.4603 20.4288 16.75 19.7293 16.75 19V17.75H17C17.7293 17.75 18.4288 17.4603 18.9445 16.9445C19.4603 16.4288 19.75 15.7293 19.75 15V8.5C19.7421 8.3116 19.6636 8.13309 19.53 8ZM14.25 4.81L17.19 7.75H14.25V4.81ZM15.25 19C15.25 19.3315 15.1183 19.6495 14.8839 19.8839C14.6495 20.1183 14.3315 20.25 14 20.25H7C6.66848 20.25 6.35054 20.1183 6.11612 19.8839C5.8817 19.6495 5.75 19.3315 5.75 19V9C5.75 8.66848 5.8817 8.35054 6.11612 8.11612C6.35054 7.8817 6.66848 7.75 7 7.75H8.25V15C8.25 15.7293 8.53973 16.4288 9.05546 16.9445C9.57118 17.4603 10.2707 17.75 11 17.75H15.25V19ZM17 16.25H11C10.6685 16.25 10.3505 16.1183 10.1161 15.8839C9.8817 15.6495 9.75 15.3315 9.75 15V5C9.75 4.66848 9.8817 4.35054 10.1161 4.11612C10.3505 3.8817 10.6685 3.75 11 3.75H12.75V8.5C12.7526 8.69811 12.8324 8.88737 12.9725 9.02747C13.1126 9.16756 13.3019 9.24741 13.5 9.25H18.25V15C18.25 15.3315 18.1183 15.6495 17.8839 15.8839C17.6495 16.1183 17.3315 16.25 17 16.25Z" fill="#000000"/></svg>';
            echo '</button></li>';
            echo '</ul>';
			echo '</div>';

            // Descrição da nota
            echo '<p>' . esc_html($descricao) . '</p>';
            echo '</div>';
        }

        echo '</div>';
    } else {
        echo '<p>Nenhuma nota encontrada.</p>';
    }

    return ob_get_clean();
}

add_shortcode('notas_claudio_humberto_4', 'notas_claudio_humberto_shortcode_4');


function notas_claudio_humberto_shortcode_restante() {
    ob_start();

    $id = get_the_ID(); 
    $notas = get_field('notas', $id); 

    if ($notas) {
        echo '<div class="notas-container">';
        
        foreach ($notas as $index => $nota) {
			 if ($index < 9) continue;
			
            $nota_id = $index + 1; 
            $titulo = $nota['title'];
            $descricao = $nota['description'];
            $permalink = get_permalink();

            echo '<div id="Nota-' . esc_attr($nota_id) . '" class="entry-block ch-nota Nota-' . esc_attr($nota_id) . '">';
			echo '<div class="Nota">';
            echo '<h3>' . esc_html($titulo) . '</h3>';

            echo '<ul class="social-ch">';
            echo '<li><a aria-label="Facebook compartilhamento Nota" href="https://www.facebook.com/sharer/sharer.php?u=' . esc_url($permalink) . '#Nota-' . esc_attr($nota_id) . '&quote=' . urlencode($titulo . ': ' . $descricao) . '" target="_blank" rel="noopener">';
            echo '<?xml version="1.0"?><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" >    <path d="M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z"/></svg>';
            echo '</a></li>';

            echo '<li><a aria-label="Whatsapp compartilhamento Nota" href="https://api.whatsapp.com/send?text=' . urlencode($titulo . ': ' . $descricao) . ' ' . esc_url($permalink) . '#Nota-' . esc_attr($nota_id) . '" target="_blank" rel="noopener">';
            echo '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><style type="text/css">
	.st0{fill:#ccc;} </style><g><path class="st0" d="M195.1,143.2c-55.8,40.2-68.5,118-28.3,173.8c2.7,3.8,3.2,8.8,1.3,13.1l-14.3,31.6l41.3-11.3
		c1.1-0.3,2.3-0.5,3.5-0.5c2.3,0,4.6,0.6,6.7,1.8c19,11.1,40.7,17,62.7,17v0c26.1,0,51.6-8.2,72.8-23.5
		c55.8-40.2,68.5-118,28.3-173.8S250.9,103,195.1,143.2z M341.9,292.5c-4.6,11.2-16.1,18.5-27.8,20.7c-11.2,2.2-20.4-1.4-30.7-4.8
		c-9.2-3.2-18.1-7.4-26.4-12.5c-16.5-10.2-30.8-23.6-42.3-39.2c-3.5-4.8-6.8-9.7-9.7-14.8c-4-6.7-7.5-13.9-9.3-21.6
		c-0.8-3.2-1.2-6.5-1.2-9.7c-0.1-11.6,4.3-23.2,13.4-30.7c5.3-4.3,13.1-6.2,19.1-2.8c6.5,3.6,9.8,12.8,12.8,19.3
		c2.3,5,4.9,11.7,4,17.3c-0.9,5.7-5.4,10.5-9,14.7c-2.4,2.8-2.8,5.3-0.8,8.3c11.8,19.7,28.3,34,49.7,42.6c2.9,1.2,5.2,0.8,7.1-1.5
		c3.7-4.6,7.3-13.5,13.1-15.9c7.5-3,15.7,1.2,22,5c5.9,3.5,15.7,7.8,17.3,15.1C343.8,285.5,343.3,289.2,341.9,292.5z"/><path class="st0" d="M256,6C118.2,6,6,118.2,6,256s112.2,250,250,250s250-112.1,250-250S393.9,6,256,6z M267.8,395.1
		c-24.8,0-49.2-6.1-71.1-17.8l-63.2,17.3c-3,0.8-6.1,0.6-8.9-0.7c-6.6-3-9.6-10.8-6.5-17.5l23-50.5c-15.8-24.3-24.2-52.8-24.1-81.8
		c0-83.2,67.7-150.9,150.9-150.9c83.2,0,150.9,67.7,150.9,150.9S351,395.1,267.8,395.1z"/>
</g>
</svg>
';
            echo '</a></li>';

            echo '<li><button class="nota-link" data-link="' . esc_html($titulo . ': ' . $descricao . ' - ' . $permalink . '#Nota-' . esc_attr($nota_id)) . '">';
            echo '<?xml version="1.0" encoding="utf-8"?><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.53 8L14 2.47C13.8595 2.32931 13.6688 2.25018 13.47 2.25H11C10.2707 2.25 9.57118 2.53973 9.05546 3.05546C8.53973 3.57118 8.25 4.27065 8.25 5V6.25H7C6.27065 6.25 5.57118 6.53973 5.05546 7.05546C4.53973 7.57118 4.25 8.27065 4.25 9V19C4.25 19.7293 4.53973 20.4288 5.05546 20.9445C5.57118 21.4603 6.27065 21.75 7 21.75H14C14.7293 21.75 15.4288 21.4603 15.9445 20.9445C16.4603 20.4288 16.75 19.7293 16.75 19V17.75H17C17.7293 17.75 18.4288 17.4603 18.9445 16.9445C19.4603 16.4288 19.75 15.7293 19.75 15V8.5C19.7421 8.3116 19.6636 8.13309 19.53 8ZM14.25 4.81L17.19 7.75H14.25V4.81ZM15.25 19C15.25 19.3315 15.1183 19.6495 14.8839 19.8839C14.6495 20.1183 14.3315 20.25 14 20.25H7C6.66848 20.25 6.35054 20.1183 6.11612 19.8839C5.8817 19.6495 5.75 19.3315 5.75 19V9C5.75 8.66848 5.8817 8.35054 6.11612 8.11612C6.35054 7.8817 6.66848 7.75 7 7.75H8.25V15C8.25 15.7293 8.53973 16.4288 9.05546 16.9445C9.57118 17.4603 10.2707 17.75 11 17.75H15.25V19ZM17 16.25H11C10.6685 16.25 10.3505 16.1183 10.1161 15.8839C9.8817 15.6495 9.75 15.3315 9.75 15V5C9.75 4.66848 9.8817 4.35054 10.1161 4.11612C10.3505 3.8817 10.6685 3.75 11 3.75H12.75V8.5C12.7526 8.69811 12.8324 8.88737 12.9725 9.02747C13.1126 9.16756 13.3019 9.24741 13.5 9.25H18.25V15C18.25 15.3315 18.1183 15.6495 17.8839 15.8839C17.6495 16.1183 17.3315 16.25 17 16.25Z" fill="#000000"/></svg>';
            echo '</button></li>';
            echo '</ul>';
			echo '</div>';

            // Descrição da nota
            echo '<p>' . esc_html($descricao) . '</p>';
            echo '</div>';
        }

        echo '</div>';
    } else {
        echo '<p>Nenhuma nota encontrada.</p>';
    }

    return ob_get_clean();
}

add_shortcode('notas_claudio_humberto_restante', 'notas_claudio_humberto_shortcode_restante');


add_action('save_post', 'set_guest_author_avatar_as_thumbnail', 10, 2);

function set_guest_author_avatar_as_thumbnail($post_id, $post) {

    if (get_post_type($post_id) !== 'post' || (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)) {
        return;
    }

    if (has_category('opiniao', $post_id)) {
        $guest_id = get_post_meta($post_id, 'guest_id', true);

        if (!$guest_id) {
            return; 
        }


        $avatar_url = get_avatar_url($guest_id, ['size' => 512]);

        $attachment_id = download_image_to_media($avatar_url);

        if ($attachment_id) {
            set_post_thumbnail($post_id, $attachment_id);
        }
    }
}

function download_image_to_media($image_url) {
    $upload_dir = wp_upload_dir();
    $image_data = file_get_contents($image_url);
    $filename = basename($image_url);

    if (wp_mkdir_p($upload_dir['path'])) {
        $file = $upload_dir['path'] . '/' . $filename;
    } else {
        $file = $upload_dir['basedir'] . '/' . $filename;
    }

    file_put_contents($file, $image_data);

    $wp_filetype = wp_check_filetype($filename, null);
    $attachment = [
        'post_mime_type' => $wp_filetype['type'],
        'post_title'     => sanitize_file_name($filename),
        'post_content'   => '',
        'post_status'    => 'inherit'
    ];

    $attach_id = wp_insert_attachment($attachment, $file);
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata($attach_id, $file);
    wp_update_attachment_metadata($attach_id, $attach_data);

    return $attach_id;
}
