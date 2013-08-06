<?php
/*
	Section: Parallax Section
	Author: opportunex - Thomas Butler
	Author URI: http://butlerconsuting.com
	Description: Creates a full width section area with parallax background options. This section extends the functionality of the full-width section to allow up to three parallax background images with variable speeds.
	Class Name: PLparallaxSection
	Filter: full-width
	Loading: active
*/


class PLparallaxSection extends PageLinesSection {

	function section_persistent(){
	
		add_filter('pl_layout_settings', array(&$this, 'add_global_options'));
	}
	
	function add_global_options( $settings ){
		$settings[] = array(

			'key'			=> 'layout_areas',
			'type' 			=> 'multi',
			'label' 	=> __( 'Section Areas', 'pagelines' ),
			'opts'	=> array(
				array(
					'key'		=> 'section_area_default_pad',
					'type' 		=> 'count_select',
					'label' 	=> __( 'Default Area Padding (px)', 'pagelines' ),
					'count_start'	=> 0,
					'count_number'	=> 200,
					'suffix'		=> 'px',
					'help'	 	=> __( 'If sections are added to full width areas, the area will be givin this default padding.', 'pagelines' )
				),
				
			),
		);
		
		return $settings;
	}
	
	function section_opts(){

		$options = array();

		$options[] = array(

			'key'	=> 'parallax_section_bg',
			'type' 	=> 'multi',
			'label' => __( 'Area Background', 'pagelines' ),
			'opts'	=> array(
				array(

					'key'  => 'parallax_section_image',
					'type' => 'image_upload',
					'sizelimit'    => 800000,
					'label'    => __( 'Background Image', 'pagelines' ),
				),
				array(
					'key'  => 'parallax_section_bg_repeat',
					'type' => 'check',
					'label'    => __( 'Repeat Background Image', 'pagelines' ),
				)
			),
			

		);
        
        $options[] = array(

			'key'    => 'parallax_section_bg1',
			'type'   => 'multi',
			'label'  => __( 'Parallax Background(1)', 'pagelines' ),
			'opts'	=> array(
				array(

					'key'  => 'parallax_section_image1',
					'type' => 'image_upload',
					'sizelimit' => 800000,
					'label' => __( 'Background Image', 'pagelines' ),
				),
				array(

					'key'  => 'parallax_section_speed1',
					'type' => 'select',
					'opts'	=> array(
						'0.5' => array('name'=> 'slow'),
						'0.3' => array('name'=> 'medium'),
						'0.1' => array('name'=> 'fast')
					),
					'label' => __( 'Parallax Layer Speed', 'pagelines' ),

				)
                
			),
            
            
		);
        
        $options[] = array(

			'key'    => 'parallax_section_bg2',
			'type'   => 'multi',
			'label'  => __( 'Parallax Background(2)', 'pagelines' ),
			'opts'	=> array(
				array(

					'key'  => 'parallax_section_image2',
					'type' => 'image_upload',
					'sizelimit' => 800000,
					'label' => __( 'Background Image', 'pagelines' ),
				),
				array(

					'key'  => 'parallax_section_speed2',
					'type' => 'select',
					'opts'	=> array(
						'0.5' => array('name'=> 'slow'),
						'0.3' => array('name'=> 'medium'),
						'0.1' => array('name'=> 'fast')
					),
					'label' => __( 'Parallax Layer Speed', 'pagelines' ),

				)
                
			),
            
            
		);
        
        $options[] = array(

			'key'    => 'parallax_section_bg3',
			'type'   => 'multi',
			'label'  => __( 'Parallax Background(3)', 'pagelines' ),
			'opts'	=> array(
				array(

					'key'  => 'parallax_section_image3',
					'type' => 'image_upload',
					'sizelimit' => 800000,
					'label' => __( 'Background Image', 'pagelines' ),
				),
				array(

					'key'  => 'parallax_section_speed3',
					'type' => 'select',
					'opts'	=> array(
						'0.5' => array('name'=> 'slow'),
						'0.3' => array('name'=> 'medium'),
						'0.1' => array('name'=> 'fast')
					),
					'label' => __( 'Parallax Layer Speed', 'pagelines' ),

				)
                
			),
            
            
		);
        
        $options[] = array(

			'key'    => 'parallax_section_pad_selects',
			'type'   => 'multi',
			'label'  => __( 'Set Area Padding', 'pagelines' ),
			'opts'   => array(
				array(
					'key'  => 'parallax_section_pad',
					'type' => 'count_select_same',
					'count_start'  => 0,
					'count_number' => 200,
					'suffix'   => 'px',
					'label' => __( 'Area Padding (px)', 'pagelines' ),
				),
				array(
					'key'  => 'parallax_section_pad_bottom',
					'type' => 'count_select_same',
					'count_start'  => 0,
					'count_number' => 200,
					'suffix' => 'px',
					'label' => __( 'Area Padding Bottom (if different)', 'pagelines' ),
				)
			),
			

		);
		
		$options[] = array(

			'key'	=> 'parallax_section_styling',
			'type' 	=> 'multi',
			'label' => __( 'Area Styling', 'pagelines' ),
			'opts'	=> array(
				array(

					'key'	=> 'parallax_section_bg',
					'type' 	=> 'select',
					'opts'	=> array(
						'pl-trans'		=> array('name'=> 'Transparent Background and Default Text Color'),
						'pl-contrast'	=> array('name'=> 'Contast Color and Default Text Color'),
						'pl-black'		=> array('name'=> 'Black Background &amp; White Text'),
						'pl-grey'		=> array('name'=> 'Dark Grey Background &amp; White Text'),
						'pl-dark-img'	=> array('name'=> 'Image-Dark: Embossed Light Text.'),
						'pl-light-img'	=> array('name'=> 'Image-Light: Embossed Dark Text.'),
						'pl-base'		=> array('name'=> 'Base Background and Default Text Color'),
					),
					'label' => __( 'Area Theme', 'pagelines' ),

				),
				array(
					'key'	=> 'parallax_section_height',
					'type' 	=> 'text',
					'label' => __( 'Area Minimum Height (px)', 'pagelines' ),
				)
			),
			

		);
		
		return $options;
	}
	
    function section_styles(){

		wp_enqueue_script( 'parallax-section', $this->base_url.'/parallax.section.js', array( 'jquery' ), PL_CORE_VERSION, true );

	}
    
	function before_section_template( $location = '' ) {

		$this->wrapper_classes['background'] = $this->opt('parallax_section_bg');
		//$this->wrapper_classes['user_classes'] = $this->opt('parallax_section_class');

	}

	function section_template( ) {
		
		$section_output = (!$this->active_loading) ? render_nested_sections( $this->meta['content'], 1) : false;
		
		$style = '';
        $classes = '';
		$inner_style = '';
		$background1 = '';
        $background2 = '';
        $background3 = '';
        $speed1 = '';
        $speed2 = '';
        $speed3 = '';
        
		$inner_style .= ($this->opt('parallax_section_height')) ? sprintf('min-height: %spx;', $this->opt('parallax_section_height')) : '';
		
		$style .= ($this->opt('parallax_section_image')) ? sprintf('background-image: url(%s);', $this->opt('parallax_section_image')) : '';
        
        $background1 .= ($this->opt('parallax_section_image1')) ? sprintf('background-image: url(%s);', $this->opt('parallax_section_image1')) : '';
        $speed1 .= ($this->opt('parallax_section_speed1')) ? sprintf($this->opt('parallax_section_speed1')) : '';
		
        $background2 .= ($this->opt('parallax_section_image2')) ? sprintf('background-image: url(%s);', $this->opt('parallax_section_image2')) : '';
        $speed2 .= ($this->opt('parallax_section_speed2')) ? sprintf($this->opt('parallax_section_speed2')) : '';
		
        $background3 .= ($this->opt('parallax_section_image3')) ? sprintf('background-image: url(%s);', $this->opt('parallax_section_image3')) : '';
		$speed3 .= ($this->opt('parallax_section_speed3')) ? sprintf($this->opt('parallax_section_speed3')) : '';
		
		$classes .= ($this->opt('parallax_section_bg_repeat')) ? ' pl-bg-repeat' : ' pl-bg-cover';
		
		// If there is no output, there should be no padding or else the empty area will have height.
		if( $section_output ){
						
			$default_padding = (pl_setting('section_area_default_pad'))	? pl_setting('section_area_default_pad') : '20px';		
					
			$padding = ($this->opt('parallax_section_pad')) ? $this->opt('parallax_section_pad') : $default_padding; 
			
			$padding = ( strpos($padding, 'px') ) ? $padding : $padding.'px';
			
			$padding_bottom = ($this->opt('parallax_section_pad_bottom')) ? $this->opt('parallax_section_pad_bottom') : $padding; 
			
			$style .= sprintf('padding-top: %s; padding-bottom: %s;', $padding, $padding_bottom);
		
			$content_class = ( $padding != '0px	' ) ? 'nested-section-area' : '';
			
			$buffer = ( pl_draft_mode() ) ? sprintf('<div class="pl-sortable pl-sortable-buffer span12 offset0"></div>') : '';
			
			$section_output = $buffer . $section_output . $buffer;
			
		} else {
			
			$pad_css = ''; 
			$content_class = '';
			
		}
        
			
	?>
	<div class="pl-area-wrap <?php echo $classes;?>" style="<?php echo $style;?>">
	<?php if ($background1 != '') : ?><div class="pl-area-wrap pl-bg-cover pl-bg-repeat plax-section" style="<?php echo $background1; echo $inner_style; ?> position: absolute; z-index: 1; width: 100% !important;" data-speed="<?php echo $speed1;?>"></div><?php endif; ?>
    <?php if ($background2 != '') : ?><div class="pl-area-wrap pl-bg-cover pl-bg-repeat plax-section" style="<?php echo $background2; echo $inner_style; ?> position: absolute; z-index: 2; width: 100% !important;" data-speed="<?php echo $speed2;?>"></div><?php endif; ?>
    <?php if ($background3 != '') : ?><div class="pl-area-wrap pl-bg-cover pl-bg-repeat plax-section" style="<?php echo $background3; echo $inner_style; ?> position: absolute; z-index: 3; width: 100% !important;" data-speed="<?php echo $speed3;?>"></div><?php endif; ?>
		<div class="pl-content <?php echo $content_class;?>" style="z-index: 5;">
			<div class="pl-inner area-region pl-sortable-area editor-row" style="<?php echo $inner_style;?>">
				<?php  echo $section_output; ?>
			</div>
		</div>
    </div>
    <?php
	}

}