<?php

function notas_claudio_humberto_shortcode_4() {
    ob_start();

    $id = get_the_ID(); 
    $notas = get_field('notas', $id); 

    if ($notas) {
        echo '<div class="notas-container">';
        
        foreach ($notas as $index => $nota) {
			if ($index >= 4 ) break;
			
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



function notas_claudio_humberto_shortcode_4_2() {
    ob_start();

    $id = get_the_ID(); 
    $notas = get_field('notas', $id); 

    if ($notas) {
        echo '<div class="notas-container">';
        
        foreach ($notas as $index => $nota) {
			 if ($index < 4 || $index >= 8) continue;
			
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

add_shortcode('notas_claudio_humberto_4_2', 'notas_claudio_humberto_shortcode_4_2');


function notas_claudio_humberto_shortcode_restante() {
    ob_start();

    $id = get_the_ID(); 
    $notas = get_field('notas', $id); 

    if ($notas) {
        echo '<div class="notas-container">';
        
        foreach ($notas as $index => $nota) {
			 if ($index < 8) continue;
			
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


function notas_claudio_humberto_shortcode_3_1() {
    ob_start();

    $id = get_the_ID(); 
    $notas = get_field('notas', $id); 

    if ($notas) {
        echo '<div class="notas-container">';
        
        foreach ($notas as $index => $nota) {
			 if ($index < 8 || $index >= 11) continue;
			
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

add_shortcode('notas_claudio_humberto_3_1', 'notas_claudio_humberto_shortcode_3_1');


function notas_claudio_humberto_shortcode_3_2() {
    ob_start();

    $id = get_the_ID(); 
    $notas = get_field('notas', $id); 

    if ($notas) {
        echo '<div class="notas-container">';
        
        foreach ($notas as $index => $nota) {
			 if ($index < 11 || $index >= 14) continue;
			
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

add_shortcode('notas_claudio_humberto_3_2', 'notas_claudio_humberto_shortcode_3_2');

function notas_claudio_humberto_shortcode_3_3() {
    ob_start();

    $id = get_the_ID(); 
    $notas = get_field('notas', $id); 

    if ($notas) {
        echo '<div class="notas-container">';
        
        foreach ($notas as $index => $nota) {
			 if ($index < 14) continue;
			
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

add_shortcode('notas_claudio_humberto_3_3', 'notas_claudio_humberto_shortcode_3_3');

add_action('save_post', 'set_guest_author_avatar_as_thumbnail', 10, 2);



// ========== Função de salvar a imagem do autor convidado como imagem destacada  "opinião" ==========

// Salvar a imagem do autor convidado como imagem destacada
function set_guest_author_avatar_as_thumbnail($post_id, $post) {
    if (get_post_type($post_id) !== 'post' || (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)) {
        return;
    }

    if (has_category('opiniao', $post_id)) {
        $guest_id = get_post_meta($post_id, 'guest_id', true);

        if (!$guest_id) {
            return;
        }

       
        $existing_avatar_id = get_transient('guest_author_avatar_' . $guest_id);
		$user_info = get_userdata($guest_id);

		if ($user_info) {
			$user_name = $user_info->display_name; 
            update_post_meta($post_id, 'guest_author_name', $user_name);
        }

        if ($existing_avatar_id) {
            
            set_post_thumbnail($post_id, $existing_avatar_id);
        } else {
            
            $avatar_url = get_avatar_url($guest_id, ['size' => 512]);
            $attachment_id = download_image_to_media($avatar_url);

            if ($attachment_id) {
                
                set_post_thumbnail($post_id, $attachment_id);

               
                set_transient('guest_author_avatar_' . $guest_id, $attachment_id);
            }
        }
    }
}

// Função para baixar a imagem do autor convidado para a biblioteca de mídia
function download_image_to_media($image_url) {
    $upload_dir = wp_upload_dir();
    $image_data = file_get_contents($image_url);
    $filename = basename($image_url);

    // Define o caminho para salvar a imagem
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

// Função para atualizar imagens destacadas de posts antigos
function update_featured_images_for_old_posts() {
    $args = [
        'post_type'      => 'post',
        'category_name'  => 'opiniao',
        'meta_query'     => [
            [
                'key'     => '_thumbnail_id',
                'compare' => 'NOT EXISTS' 
            ],
        ],
        'posts_per_page' => -1, 
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();

            set_guest_author_avatar_as_thumbnail($post_id, get_post($post_id));
        }
    }

    wp_reset_postdata();
}

// Função para atualizar os nomes dos autores convidados de posts antigos
function update_guest_author_names_for_old_posts() {
    $args = [
        'post_type'      => 'post',
        'category_name'  => 'opiniao', 
        'posts_per_page' => -1, 
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();
            $guest_id = get_post_meta($post_id, 'guest_id', true);

            if ($guest_id) {
                $user_info = get_userdata($guest_id); 

                if ($user_info) {
                    $user_name = $user_info->display_name; 
                    update_post_meta($post_id, 'guest_author_name', $user_name);
                }
            }
        }
    }

    wp_reset_postdata(); 
}

// Função para rodar ambas as atualizações apenas uma vez com timeout de 3 minutos
function run_update_for_old_posts_once() {
    $start_time = get_option('update_for_old_posts_start_time');

    if (!$start_time) {
        update_option('update_for_old_posts_start_time', time());
    } elseif ((time() - $start_time) > 180) {
        return;
    }

    if (!get_option('update_featured_images_completed')) {
        update_featured_images_for_old_posts();
        update_option('update_featured_images_completed', true); 
    }

    if (!get_option('update_guest_author_names_completed')) {
        update_guest_author_names_for_old_posts();
        update_option('update_guest_author_names_completed', true); 
    }
}

// Adiciona a função no gancho admin_init para rodar uma vez no painel de administração
add_action('admin_init', 'run_update_for_old_posts_once');


// ========== Função para atualizar o layout de posts antigos para o layout 'claudio-humberto' ===========

// Função para atualizar o layout dos posts antigos
// function update_layout_for_old_posts() {
//     $args = [
//         'post_type'      => 'post',
//         'category_name'  => 'coluna-claudio-humberto', 
//         'posts_per_page' => -1, 
//     ];

//     $query = new WP_Query($args);

//     if ($query->have_posts()) {
//         while ($query->have_posts()) {
//             $query->the_post();
//             $post_id = get_the_ID();

//             update_post_meta($post_id, 'penci_single_builder_layout', 'claudio-humberto');
//         }
//     }

//     wp_reset_postdata();
// }

// // Função para rodar a atualização do layout apenas uma vez com timeout de 3 minutos
// function run_layout_update_for_old_posts_once() {
//     $start_time = get_option('update_layout_start_time');

//     if (!$start_time) {
//         update_option('update_layout_start_time', time());
//     } elseif ((time() - $start_time) > 180) {
//         return;
//     }

//     if (!get_option('update_layout_for_old_posts_completed')) {
//         update_layout_for_old_posts();
//         update_option('update_layout_for_old_posts_completed', true);
//     }
// }

// // Adiciona a função no gancho admin_init para rodar uma vez no painel de administração
// add_action('admin_init', 'run_layout_update_for_old_posts_once');



// ========== Função para adicionar um novo estilo de categoria em destaque ==========

function add_custom_featured_cat_style( $styles ) {
    $styles['subabre'] = __( 'SubAbre Style', 'soledad' ); 
    return $styles;
}
add_filter( 'penci_featured_cat_styles', 'add_custom_featured_cat_style' );

function penci_custom_featured_cat_template( $style ) {
    if ( 'subabre' === $style ) {
        // Início do código do template
        $thumbsize = penci_featured_images_size();

        // Determine o tamanho da imagem
        if ( 'horizontal' == $penci_featimg_size ) {
            $thumbsize = 'penci-thumb';
        } else if ( 'square' == $penci_featimg_size ) {
            $thumbsize = 'penci-thumb-square';
        } else if ( 'vertical' == $penci_featimg_size ) {
            $thumbsize = 'penci-thumb-vertical';
        } else if ( 'custom' == $penci_featimg_size ) {
            if ( $thumb_size ) {
                $thumbsize = $thumb_size;
            }
        }

        // Obter a URL da imagem ACF
        $acf_image_url = get_field('imagem_sub_abre') ?: penci_get_featured_image_size( get_the_ID(), $thumbsize );
        $post_link = get_permalink() . '#SubAbre';
        ?>
        <div class="mag-post-box hentry<?php if ( $m == 1 ): echo ' first-post'; endif; ?>">
            <div class="magcat-thumb">
                <?php
                $size_pie = 'small';
                if ( $m == 1 ): $size_pie = 'normal'; endif;
                do_action( 'penci_bookmark_post', get_the_ID(), $size_pie );

                if ( function_exists( 'penci_display_piechart_review_html' ) ) {
                    penci_display_piechart_review_html( get_the_ID(), $size_pie );
                }
                ?>

                <a class="penci-image-holder<?php if ( $m > 1 ): echo ' small-fix-size'; endif; ?><?php echo penci_class_lightbox_enable(); ?>"
                   style="background-image: url('<?php echo esc_url( $acf_image_url ); ?>');"
                   href="<?php echo esc_url( $post_link ); ?>" 
                   title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
                </a>
                
                <?php if ( has_post_thumbnail() && 'yes' != $hide_icon_format ): ?>
                    <?php if ( has_post_format( 'video' ) ) : ?>
                        <a href="<?php echo esc_url( $post_link ); ?>" class="icon-post-format"
                           aria-label="Icon"><?php penci_fawesome_icon( 'fas fa-play' ); ?></a>
                    <?php endif; ?>
                    <?php if ( has_post_format( 'audio' ) ) : ?>
                        <a href="<?php echo esc_url( $post_link ); ?>" class="icon-post-format"
                           aria-label="Icon"><?php penci_fawesome_icon( 'fas fa-music' ); ?></a>
                    <?php endif; ?>
                    <?php if ( has_post_format( 'link' ) ) : ?>
                        <a href="<?php echo esc_url( $post_link ); ?>" class="icon-post-format"
                           aria-label="Icon"><?php penci_fawesome_icon( 'fas fa-link' ); ?></a>
                    <?php endif; ?>
                    <?php if ( has_post_format( 'quote' ) ) : ?>
                        <a href="<?php echo esc_url( $post_link ); ?>" class="icon-post-format"
                           aria-label="Icon"><?php penci_fawesome_icon( 'fas fa-quote-left' ); ?></a>
                    <?php endif; ?>
                    <?php if ( has_post_format( 'gallery' ) ) : ?>
                        <a href="<?php echo esc_url( $post_link ); ?>" class="icon-post-format"
                           aria-label="Icon"><?php penci_fawesome_icon( 'far fa-image' ); ?></a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="magcat-detail">
                <?php if ( $m == 1 ): ?>
                <div class="mag-header"><?php endif; ?>
                    <h3 class="magcat-titlte entry-title"><a
                        href="<?php echo esc_url( $post_link ); ?>"><?php penci_trim_post_title( get_the_ID(), ( $m == 1 ? $big_title_length : $_title_length ) ); ?></a>
                    </h3>
                    <?php if ( ( isset( $custom_meta_key ) && $custom_meta_key['validator'] ) || ( ( $m == 1 || $show_author_sposts ) && 'yes' != $hide_author ) || 'yes' != $hide_date || 'yes' == $show_viewscount || 'yes' == $show_commentcount || penci_isshow_reading_time( $hide_readtime ) ): ?>
                        <div class="grid-post-box-meta mag-meta">
                            <?php if ( ( $m == 1 || $show_author_sposts ) && 'yes' != $hide_author ) : ?>
                                <span class="featc-author author-italic author vcard"><?php echo penci_get_setting( 'penci_trans_by' ); ?> <?php if ( function_exists( 'coauthors_posts_links' ) ) :
                                        penci_coauthors_posts_links();
                                    else: ?>
                                        <a class="author-url url fn n"
                                        href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
                                    <?php endif; ?></span>
                            <?php endif; ?>
                            <?php if ( 'yes' != $hide_date ) : ?>
                                <span class="featc-date"><?php penci_soledad_time_link(); ?></span>
                            <?php endif; ?>
                            <?php if ( 'yes' == $show_commentcount ) : ?>
                                <span class="featc-comment"><a
                                    href="<?php comments_link(); ?> "><?php comments_number( '0 ' . penci_get_setting( 'penci_trans_comments' ), '1 ' . penci_get_setting( 'penci_trans_comment' ), '% ' . penci_get_setting( 'penci_trans_comments' ) ); ?></a></span>
                            <?php endif; ?>
                            <?php
                            if ( 'yes' == $show_viewscount ) {
                                echo '<span>';
                                echo penci_get_post_views( get_the_ID() );
                                echo ' ' . penci_get_setting( 'penci_trans_countviews' );
                                echo '</span>';
                            }
                            ?>
                            <?php if ( penci_isshow_reading_time( $hide_readtime ) ): ?>
                                <span class="featc-readtime"><?php penci_reading_time(); ?></span>
                            <?php endif; ?>
                            <?php if ( isset( $custom_meta_key ) ) {
                                echo penci_show_custom_meta_fields( $custom_meta_key );
                            } ?>
                        </div>
                    <?php endif; ?>
                    <?php if ( $m == 1 ): ?></div><?php endif; ?>
                <?php if ( $m == 1 && get_the_excerpt() && 'yes' != $hide_excerpt ): ?>
                    <div class="mag-excerpt entry-content">
                        <?php
                        if ( isset( $_excerpt_length ) ) {
                            $_excerpt_length = $_excerpt_length ? $_excerpt_length : 25;
                            penci_the_excerpt( $_excerpt_length );
                        } else {
                            the_excerpt();
                        }
                        ?>
                    </div>
                <?php endif; ?>
                <?php penci_soledad_meta_schema(); ?>
            </div>
        </div>
        <?php
    }
}
add_action( 'penci_featured_cat_template', 'penci_custom_featured_cat_template' );


// ========== Função para exibir o post mais recente da categoria 'coluna-claudio-humberto' ==========

function recent_post_from_claudio_humberto() {
    
    $category_slug = 'coluna-claudio-humberto';

    $args = array(
        'category_name' => $category_slug,
        'posts_per_page' => 1,
    );


    $recent_post = new WP_Query($args);


    if ($recent_post->have_posts()) {
        $recent_post->the_post();


        $acf_image = get_field('imagem_sub_abre');
        $acf_image_url = $acf_image ? esc_url($acf_image['url']) : get_the_post_thumbnail_url(get_the_ID(), 'full');

        $notas = get_field('notas', get_the_ID());
		
		$acf_retranca = get_field('chapeu_sub_abre');
   

        $titulo = get_the_title(); 
        $descricao = get_the_excerpt(); 

        if ($notas && isset($notas[4])) { 
            $titulo = $notas[4]['title']; 
            $descricao = $notas[4]['description']; 
        }

        $output = '<div id="pencifeatured_cat_' . get_the_ID() . '" class="penci-featured-cat-sc">';
        $output .= '<div class="home-featured-cat mag-cat-style-2">';
        $output .= '<div class="home-featured-cat-wrapper">';
        $output .= '<div class="home-featured-cat-content pwf-id-default style-2">';
        $output .= '<div class="mag-post-box hentry first-post">';
        $output .= '<div class="magcat-thumb">';
        $output .= '<a class="penci-image-holder penci-lazy lazyloaded" style="background-image: url(\'' . esc_url($acf_image_url) . '\');" href="' . esc_url(get_permalink() . '#SubAbre') . '" title="' . esc_attr($titulo) . '"></a>';
        $output .= '</div>';
        $output .= '<div class="magcat-detail">';
        $output .= '<div class="mag-header">';
		$output .= '<div class="grid-post-box-meta mag-meta"><span class="pccsmt-field chapeu">'. esc_html($acf_retranca) .'</span></div>';
        $output .= '<h3 class="magcat-titlte entry-title">';
        $output .= '<a href="' . esc_url(get_permalink() . '#SubAbre') . '">' . esc_html($titulo) . '</a>';
        $output .= '</h3>';
        $output .= '</div>';
        $output .= '<div class="mag-excerpt entry-content">';
        $output .= '<p>' . esc_html($descricao) . '</p>';
        $output .= '</div>';  
        $output .= '<div class="penci-hide-tagupdated">';
        $output .= '<span class="author-italic author vcard">por ';
        $output .= '<a class="author-url url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . get_the_author() . '</a>';
        $output .= '</span>';
        $output .= '</div>';
        $output .= '</div>'; 
        $output .= '</div>'; 
        $output .= '</div>'; 
        $output .= '</div>'; 
        $output .= '</div>'; 
		$output .= '</div>'; 

        wp_reset_postdata(); 

        return $output; 
    }

    wp_reset_postdata();
    return '<p>Nenhum post encontrado.</p>';
}

add_shortcode('recent_claudio_humberto', 'recent_post_from_claudio_humberto');


function recent_post_from_claudio_humberto_sub_abre($atts) {

     $atts = shortcode_atts(array(
        'offset' => 0, 
    ), $atts, 'recent_claudio_humberto');

    $category_slug = 'coluna-claudio-humberto';

    $args = array(
        'category_name'  => $category_slug,
        'posts_per_page' => 1,
        'offset'         => intval($atts['offset']), 
    );


    $recent_post = new WP_Query($args);

    if ($recent_post->have_posts()) {
        $recent_post->the_post();

        $acf_image = get_field('imagem_sub_abre');
        $acf_image_url = $acf_image ? esc_url($acf_image['url']) : get_the_post_thumbnail_url(get_the_ID(), 'full');

		$acf_retranca = get_field('chapeu_sub_abre');
        $notas = get_field('notas', get_the_ID());
        

        $titulo = get_the_title();
        $descricao = get_the_excerpt();

        if ($notas && isset($notas[4])) {
            $titulo = $notas[4]['title'];
            $descricao = $notas[4]['description'];
        }

        $output = '<div class="home-featured-cat mag-cat-style-2">';
        $output .= '<div class="home-featured-cat-wrapper">';
        $output .= '<div class="home-featured-cat-content pwf-id-default style-2">';
        $output .= '<div class="mag-post-box hentry first-post">';

        $output .= '<div class="magcat-thumb">';
        $output .= '<a class="penci-image-holder penci-lazy lazyloaded pcloaded" data-bgset="' . esc_url($acf_image_url) . '" href="' . esc_url(get_permalink() . '#SubAbre') . '" title="' . esc_attr($titulo) . '" style="background-image: url(\'' . esc_url($acf_image_url) . '\');"></a>';
        $output .= '</div>';

        //  título e autor
        $output .= '<div class="magcat-detail">';
        $output .= '<div class="mag-header">';
		$output .= '<span>'. esc_html($acf_retranca) .'</span>';
        $output .= '<h3 class="magcat-titlte entry-title"><a href="' . esc_url(get_permalink() . '#SubAbre') . '">' . esc_html($titulo) . '</a></h3>';
        $output .= '</div>';
        $output .= '<div class="penci-hide-tagupdated">';
        $output .= '<span class="author-italic author vcard">por <a class="author-url url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . get_the_author() . '</a></span>';
        $output .= '</div>';
        $output .= '</div>';

        $output .= '</div>'; // .mag-post-box
        $output .= '</div>'; // .home-featured-cat-content
        $output .= '</div>'; // .home-featured-cat-wrapper
        $output .= '</div>'; // .home-featured-cat

        wp_reset_postdata();

        return $output;
    }


    wp_reset_postdata();
    return '<p>Nenhum post encontrado.</p>';
}

//offset opcional
add_shortcode('recent_claudio_humberto_sub_abre', 'recent_post_from_claudio_humberto_sub_abre');


function get_guest_user_name_shortcode($atts) {
    $post_id = get_the_ID();
    $guest_user = get_field('guest_id', $post_id); 

    if (is_array($guest_user) && isset($guest_user['ID'])) {
        $guest_id = $guest_user['ID']; 

        $user = get_user_by('ID', $guest_id);
        if ($user) {
            return $user->display_name; 
        }
    }

    return 'Autor convidado não encontrado'; 
}
add_shortcode('guest_user_name', 'get_guest_user_name_shortcode');


// Colocar categoria automaticamente no post Claudio Humberto quando salvo
function set_custom_post_template($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (has_category('coluna-claudio-humberto', $post_id)) {
       
        delete_post_meta($post_id, 'penci_single_builder_layout');
    	delete_post_meta($post_id, 'penci_post_builder_template');
       
		update_post_meta($post_id, 'penci_single_builder_layout', 'claudio-humberto');
        update_post_meta($post_id, 'penci_post_builder_template', 'claudio-humberto-post');
		
        $post = get_post($post_id);
        
        // Exibe os dados do post 
//         var_dump($post);

        $meta_data = get_post_meta($post_id);
//         var_dump($meta_data);

        error_log(print_r($post, true));
        error_log(print_r($meta_data, true));
      
        error_log('Template atualizado para Claudio-humberto-post no post ID: ' . $post_id);
    }

    if (has_category('opiniao', $post_id)) {
        delete_post_meta($post_id, 'penci_single_builder_layout');
        delete_post_meta($post_id, 'penci_post_builder_template');
        
        update_post_meta($post_id, 'penci_single_builder_layout', 'opiniao');
        update_post_meta($post_id, 'penci_post_builder_template', 'opiniao');

        error_log('Template atualizado para Opiniao no post ID: ' . $post_id);
    }

}
add_action('wp_insert_post', 'set_custom_post_template', 100);



// ============  Chama a função uma vez para atualizar os posts antigos ==============================

// Função para aplicar o template automaticamente em posts antigos das categorias "coluna-claudio-humberto" e "opiniao"
function update_old_posts_template() {
    if (get_transient('update_old_posts_template_ran')) {
        return; // Se já tiver rodado, sai da função
    }

    $posts_per_page = 50;
    $paged = get_transient('update_old_posts_template_paged') ?: 1;

    $args = array(
        'category_name' => 'coluna-claudio-humberto, opiniao',
        'post_type'     => 'post',
        'posts_per_page'=> $posts_per_page, 
        'paged'         => $paged,
        'fields'        => 'ids'
    );

    $posts = get_posts($args);

    if ($posts) {
        foreach ($posts as $post_id) {
            // Se for da categoria "coluna-claudio-humberto"
            if (has_category('coluna-claudio-humberto', $post_id)) {
                delete_post_meta($post_id, 'penci_single_builder_layout');
                delete_post_meta($post_id, 'penci_post_builder_template');

                update_post_meta($post_id, 'penci_single_builder_layout', 'claudio-humberto');
                update_post_meta($post_id, 'penci_post_builder_template', 'claudio-humberto-post');

                error_log('Template atualizado para Claudio-humberto-post no post ID: ' . $post_id);
            }

            // Se for da categoria "opiniao"
            if (has_category('opiniao', $post_id)) {
                delete_post_meta($post_id, 'penci_single_builder_layout');
                delete_post_meta($post_id, 'penci_post_builder_template');

                update_post_meta($post_id, 'penci_single_builder_layout', 'opiniao');
                update_post_meta($post_id, 'penci_post_builder_template', 'opiniao');

                error_log('Template atualizado para Opiniao no post ID: ' . $post_id);
            }
        }

        set_transient('update_old_posts_template_paged', $paged + 1, 3 * MINUTE_IN_SECONDS);

        set_transient('update_old_posts_template_ran', true, 3 * MINUTE_IN_SECONDS);
    } else {
        set_transient('update_old_posts_template_ran', true, 3 * MINUTE_IN_SECONDS);
    }
}

// Executa a função de forma assíncrona em lotes (isso pode ser feito com um cron job ou manualmente)
add_action('admin_init', 'update_old_posts_template');

// ==============  Atualizar Post antigos =====================

