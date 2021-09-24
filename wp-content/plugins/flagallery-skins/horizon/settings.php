<?php
$default_options = array(
	'linkTargetWindow' => '_blank',
	//Slider
	'galleryType' => 'posts',
	'collectionSliderBgColor' => 'rgba(0, 0, 0, 0)',
	'collectionDraggable' => '1',
	'collectionScrollBar' => '1',
	'collectionScrollBarTrackColor' => 'rgba(0, 0, 0, 0.5)',
	'collectionScrollBarThumbColor' => 'rgba(0, 0, 0, 0.5)',
	'collectionBulletsShow' => '1',
	'collectionBulletsColor' => 'rgba(229, 229, 229, 1)',
	'collectionBulletsActivColor' => 'rgba(0, 0, 0, 1)',
	'collectionNextPprevNavigation' => '1',
	'collectionNextPprevIconColor' => 'rgba(255, 255, 255, 1)',
	'collectionNextPprevColor' => 'rgba(0, 0, 0, 0.5)',
	'collectionNextPprevColorHover' => 'rgba(0, 0, 0, 1)',
	//Thumbnails
	'collectionThumbRecomendedWidth' => '200',
	'thumbSpacing' => '10',
    'collectionThumbHoverColor' => 'rgba(0, 0, 0, .7)',
    'collectionThumbTitleShow' => '1',
    'collectionThumbTitleColor' => 'rgba(0,0,0,1)',
	'collectionThumbFontSize' => '18',
	// Thumb Post Style
	'collectionThumbContentBGColor' => 'rgba(245,245,245,1)',
    'collectionThumbDescriptionShow' => '1',
    'collectionThumbDescriptionColor' => 'rgba(0,0,0,1)',
    'collectionThumbDescriptionFontSize' => '15',
    'collectionReadMoreButtonLabel'=>'Read More',
    'collectionReadMoreButtonLabelColor'=>'rgba(255, 255, 255, 1)',
    'collectionReadMoreButtonBGColor'=>'rgba(0, 0, 0, 1)',
    'collectionReadMoreButtonLabelColorHover'=>'rgba(0, 0, 0, 1)',
    'collectionReadMoreButtonBGColorHover'=>'rgba(235,235,235,1)',
	// Thumb  MultiRows & Cell Style
	'collectionThumbsRows' => '3',
	'collectionThumbsHieghtRatio' => '1',
	'collectionThumbSubMenuVisibility' => '1',
	'collectionThumbSubMenuInfo' => '1',
	'collectionThumbSubMenuDownload' => '1',
	'collectionThumbSubMenuShare' => '1',
	'collectionThumbSubMenuLikes' => '1',
	'collectionThumbSubMenuBgColor' => 'rgba(0,0,0,0)',
	'collectionThumbSubMenuBgColorHover' => 'rgba(255,255,255,1)',
	'collectionThumbSubMenuIconColor' => 'rgba(255,255,255,1)',
	'collectionThumbSubMenuIconColorHover' => 'rgba(0,0,0,1)',
	//Tags Cloud
	'tagsFilter' => '1',
	'tagCloudSort'=> '1',
	'tagCloudAll' => 'All',
	'tagCloudAllTagPresented' => '1',
	'tagCloudStartIndex' => '0',
    'tagCloudTextColor' => '#000000',
    'tagCloudBgColor' => '#eeeeee',
	//Modal Window
    'modaBgColor'=> 'rgba(0,0,0,0.9)',
    'modalInfoBoxBgColor' => 'rgba(255,255,255,1)',
    'modalInfoBoxTitleTextColor' => 'rgba(0,0,0,1)',
    'modalInfoBoxTextColor' => 'rgba(70,70,70,1)',
    'infoBarExifEnable' => '1',
    'infoBarCountersEnable'=> '1',
    'infoBarDateInfoEnable'=> '1',
    // Slider Page
    'lightBoxEnable' => '1',
    'copyR_Protection' => '1',
    'copyR_Alert' => 'Hello, this photo is mine!',
    'sliderScrollNavi' => '0',
    'sliderNextPrevAnimation' => 'animation',
    'sliderPreloaderColor' => '#ffffff',
    'sliderBgColor' => 'rgba(0,0,0,0.8)',
    'sliderHeaderFooterBgColor' => '#000000',
    'sliderNavigationColor' => 'rgba(0,0,0,1)',
    'sliderNavigationIconColor' => 'rgba(255,255,255,1)',
    'sliderNavigationColorOver' => 'rgba(255,255,255,1)',
    'sliderNavigationIconColorOver' => 'rgba(0,0,0,1)',
    'sliderItemTitleEnable' => '1',
    'sliderItemTitleFontSize' => '24',
    'sliderItemTitleTextColor' => '#ffffff',
    'sliderThumbBarEnable' => '1',
    'sliderThumbBarHoverColor' => '#ffffff',
    'sliderThumbSubMenuBackgroundColor' => 'rgba(0,0,0,1)',
    'sliderThumbSubMenuBackgroundColorOver' => 'rgba(255,255,255,1)',
    'sliderThumbSubMenuIconColor' => 'rgba(255,255,255,1)',
    'sliderThumbSubMenuIconHoverColor' => 'rgba(0,0,0,1)',
    'sliderPlayButton' => '1',
    'slideshowDelay' => '8',
    'slideshowProgressBarColor' => 'rgba(255,255,255,1)',
    'slideshowProgressBarBGColor' => 'rgba(255,255,255,0.6)',
    'sliderInfoEnable' => '1',
    'sliderZoomButton' => '1',
    'sliderItemDownload' => '1',
    'sliderSocialShareEnabled' => '1',
    'sliderLikesEnabled' => '1',
    'sliderFullScreen' => '1',
    // Custom CSS
    'customCSS' => ''
);
$options_tree = array(
	array(
		'label' => 'Common Settings',
		'fields' => array(
			'linkTargetWindow'           => array(
				'label'   => 'Link target',
				'tag'     => 'select',
				'attr'    => '',
				'text'    => '',
				'choices' => array(
					array(
						'label' => '_blank',
						'value' => '_blank'
					),
					array(
						'label' => '_self',
						'value' => '_self'
					)
				)
			),
		)
	),
	array(
		'label' => 'Slider Settings',
		'fields' => array(
			'galleryType'           => array(
				'label'   => 'Slider layout',
				'tag'     => 'select',
				'attr'    => 'data-watch="change"',
				'text'    => '',
				'choices' => array(
					array(
						'label' => 'Posts Style',
						'value' => 'posts'
					),
					array(
						'label' => 'Multi Rows',
						'value' => 'multirows'
					),
					array(
						'label' => 'Cell Style',
						'value' => 'cells'
					)
				),
				'premium' => true
			),
			'collectionSliderBgColor' => array(
				'label' => 'Slider Background Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba"',
				'text' => ''
			),
			'collectionDraggable' => array(
				'label' => 'Slider Draggable Mode Enable',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => '',
				'premium' => true
			),
			'collectionScrollBar' => array(
				'label' => 'Scroll Bar Enable',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'premium' => true
			),
			'collectionScrollBarTrackColor' => array(
				'label' => 'Srollbar Track color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba"',
				'text' => '',
				'premium' => true
			),
			'collectionScrollBarThumbColor' => array(
				'label' => 'Scrollbar Thumb color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba"',
				'text' => '',
				'premium' => true
			),
			'collectionBulletsShow' => array(
				'label' => 'Bullets Navigation',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => 'Show Bullets Navigation',
				'premium' => true
			),
			'collectionBulletsColor' => array(
				'label' => 'Bullets navigation Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba" data-collectionBulletsShow="is:1"',
				'text' => '',
				'premium' => true
			),
			'collectionBulletsActivColor' => array(
				'label' => 'Bullets navigation Selected Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba"',
				'text' => '',
				'premium' => true
			),
			'collectionNextPprevNavigation' => array(
				'label' => 'Show Next/Prev navigation',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => ''
			),
			'collectionNextPprevIconColor' => array(
				'label' => 'Next/Prev Icon Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba" data-collectionNextPprevNavigation="is:1"',
				'text' => ''
			),
			'collectionNextPprevColor' => array(
				'label' => 'Next/Prev Button Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba" data-collectionNextPprevNavigation="is:1"',
				'text' => ''
			),
			'collectionNextPprevColorHover' => array(
				'label' => 'Next/Prev Button Hoiver Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba" data-collectionNextPprevNavigation="is:1"',
				'text' => ''
			),
		)
	),
	array(
		'label' => 'Thumbnails Settings - Global',
		'fields' => array(
			'collectionThumbRecomendedWidth' => array(
				'label' => 'Thumbnail - desired Width',
				'tag' => 'input',
				'attr' => 'type="number" min="100" max="500"',
				'text' => ''
			),
			'thumbSpacing' => array(
				'label' => 'Space between thumbnails',
				'tag' => 'input',
				'attr' => 'type="number" min="0" max="100"',
				'text' => ''
			),
			'collectionThumbHoverColor' => array('label' => 'Hover color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
			),
			'collectionThumbTitleShow' => array('label' => 'Title',
                'tag' => 'checkbox',
                'attr' => 'data-watch="change"',
                'text' => ''
            ),
            'collectionThumbTitleColor' => array('label' => 'Title Text color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'collectionThumbFontSize' => array('label' => 'Title Font size',
                'tag' => 'input',
                'attr' => 'type="number" min="11" max="24" step="1"',
                'text' => ''
            ),
		)
	),
	array(
		'label' => 'Thumbnails Settings - Post Style',
		'fields' => array(
			'collectionThumbContentBGColor' => array(
				'label' => 'Thumbnails Info bar - background color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba" data-galleryType="is:posts"',
				'text' => 'Options for Posts Style Layout'
			),
            'collectionThumbDescriptionShow' => array('label' => 'Item Description',
                'tag' => 'checkbox',
                'attr' => 'data-watch="change"',
                'text' => ''
            ),
            'collectionThumbDescriptionColor' => array('label' => 'Description Text color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'collectionThumbDescriptionFontSize' => array('label' => 'Description Font size',
                'tag' => 'input',
                'attr' => 'type="number" min="11" max="24" step="1"',
                'text' => ''
            ),
            'collectionReadMoreButtonLabel' => array('label' => 'Read More button Label Text',
                'tag' => 'input',
                'attr' => '',
                'text' => 'Read More'
            ),
            'collectionReadMoreButtonBGColor' => array('label' => 'Read More button color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'collectionReadMoreButtonBGColorHover' => array('label' => 'Read More button Hover color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'collectionReadMoreButtonLabelColor' => array('label' => 'Read More button Label color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
            'collectionReadMoreButtonLabelColorHover' => array('label' => 'Read More button Label Hover color',
                'tag' => 'input',
                'attr' => 'type="text" data-type="rgba"',
                'text' => ''
            ),
		)
	),
	array(
		'label' => 'Thumbnails Settings - Multi Rows and Cell Style Layouts',
		'fields' => array(
			'collectionThumbsHieghtRatio' => array(
				'label' => 'Thumbnail Size ratio',
				'tag' => 'input',
				'attr' => 'type="number" min="0.1" max="2" step="0.1" data-galleryType="not:posts"',
				'text' => 'Height / Width = Ratio.',
				'premium' => true
			),
			'collectionThumbsRows' => array(
				'label' => 'Desired number of rows',
				'tag' => 'input',
				'attr' => 'type="number" min="1" max="10" step="1" data-galleryType="is:multi"',
				'text' => '',
				'premium' => true
			),
			'collectionThumbSubMenuVisibility' => array('label' => 'Item Submenu',
		        'tag' => 'checkbox',
		        'attr' => 'data-watch="change"',
                'text' => '',
                'premium' => true
	        ),
			'collectionThumbSubMenuInfo' => array('label' => 'Thumbnail Info Button',
		        'tag' => 'checkbox',
		        'attr' => 'data-collectionThumbSubMenuVisibility="is:1"',
                'text' => '',
                'premium' => true
	        ),
	        'collectionThumbSubMenuDownload' => array('label' => 'Thumbnail Download Button',
		        'tag' => 'checkbox',
		        'attr' => 'data-collectionThumbSubMenuVisibility="is:1"',
                'text' => '',
                'premium' => true
	        ),
	        'collectionThumbSubMenuShare' => array('label' => 'Thumbnail Share Button',
		        'tag' => 'checkbox',
		        'attr' => 'data-collectionThumbSubMenuVisibility="is:1"',
                'text' => '',
                'premium' => true
	        ),
	        'collectionThumbSubMenuLikes' => array('label' => 'Thumbnail Like Button',
		        'tag' => 'checkbox',
		        'attr' => 'data-collectionThumbSubMenuVisibility="is:1"',
                'text' => '',
                'premium' => true
	        ),
			'collectionThumbSubMenuBgColor' => array('label' => 'Thumbnail Button Color',
		        'tag' => 'input',
		        'attr' => 'type="text" data-type="rgba" data-collectionThumbSubMenuVisibility="is:1"',
                'text' => '',
                'premium' => true
	        ),
			'collectionThumbSubMenuBgColorHover' => array('label' => 'Thumbnail Button Hover Color',
		        'tag' => 'input',
		        'attr' => 'type="text" data-type="rgba" data-collectionThumbSubMenuVisibility="is:1"',
                'text' => '',
                'premium' => true
	        ),
	        'collectionThumbSubMenuIconColor' => array('label' => 'Thumbnail Button Icon Color',
		        'tag' => 'input',
		        'attr' => 'type="text" data-type="rgba" data-collectionThumbSubMenuVisibility="is:1"',
                'text' => '',
                'premium' => true
	        ),
	        'collectionThumbSubMenuIconColorHover' => array('label' => 'Thumbnail Button Icon Hover Color',
		        'tag' => 'input',
		        'attr' => 'type="text" data-type="rgba" data-collectionThumbSubMenuVisibility="is:1"',
                'text' => '',
                'premium' => true
	        )
		)
	),
	array(
		'label' => 'Album Filter',
		'fields' => array(
			'tagsFilter' => array(
				'label' => 'Album Filter enable',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => 'Add filter for album',
				'premium' => true
			),
			'tagCloudSort' => array(
				'label' => 'Sort gallery titls alphabetically',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => 'Otherwise, the sequence will be as in the Album or List',
				'premium' => true
			),
			'tagCloudAllTagPresented' => array(
				'label' => 'Add the "ALL" gallery (virtual) to the filter list',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => '',
				'premium' => true
			),
			'tagCloudAll' => array(
				'label' => 'ALL - name',
				'tag' => 'input',
				'attr' => '',
				'text' => '',
				'premium' => true
			),
			'tagCloudStartIndex' => array(
				'label' => 'Start displaying the Album from the first gallery in the list.',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => 'Otherwise, if "ALL" is present, the album will be displayed in its entirety (initially)',
				'premium' => true
			),
			'tagCloudTextColor' => array(
				'label' => 'Text color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => 'Filter button',
				'premium' => true
			),
			'tagCloudBgColor' => array(
				'label' => 'Background color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => 'Filter button',
				'premium' => true
			)
		)
	),
	array(
		'label' => 'Modal Window Settings (Item Info & Share)',
		'fields' => array(
			'modaBgColor' => array(
				'label' => 'Overlap Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba"',
				'text' => ''
			),
			'modalInfoBoxBgColor' => array(
				'label' => 'Info Bar Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba"',
				'text' => ''
			),
			'modalInfoBoxTitleTextColor' => array(
				'label' => 'Info Bar Title text Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'modalInfoBoxTextColor' => array(
				'label' => 'Info Bar Text Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'infoBarExifEnable' => array(
				'label' => 'Show Exif Data',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => '',
				'premium' => true,
			),
			'infoBarCountersEnable' => array(
				'label' => 'Show View/Likes',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => ''
			),
			'infoBarDateInfoEnable' => array(
				'label' => 'Show Item Date',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => ''
			)
		)
	),
	array(
		'label' => 'Lightbox Settings',
		'fields' => array(
			'lightBoxEnable' => array(
				'label' => 'Lightbox',
				'tag' => 'checkbox',
				'attr' => '',
				'text' => 'Show the item in the Lightbox by clicking on the thumbnail'
			),
			'copyR_Protection' => array(
				'label' => 'Enable Download Protection',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => 'Disable right click to protect content from download',
				'premium' => true
			),
			'copyR_Alert' => array(
				'label' => 'Copyright protection - Alert',
				'tag' => 'input',
				'attr' => 'type="text"',
				'text' => 'This message is displayed when a visitor clicks the right mouse button on a photo in a lightbox.',
				'premium' => true
			),
			'sliderScrollNavi' => array(
				'label' => 'Scroll to navigate (mouse wheel)',
				'tag' => 'checkbox',
				'attr' => '',
				'text' => 'Using this disable mouse wheel scaling!',
				'premium' => true
			),
			'sliderNextPrevAnimation' => array(
				'label'   => 'Items Transition Type',
				'tag'     => 'select',
				'attr'    => 'data-watch="change"',
				'text'    => '',
				'choices' => array(
					array(
						'label' => 'Slipping',
						'value' => 'animation'
					),
					array(
						'label' => 'Fade-In',
						'value' => 'fade'
					),
				),
				'premium' => true
			),
			'sliderPreloaderColor' => array(
				'label' => 'Preloader Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'sliderBgColor' => array(
				'label' => 'Background color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba"',
				'text' => ''
			),
			'sliderHeaderFooterBgColor' => array(
				'label' => 'Header & Footer background color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => 'Gradient color'
			),
			'sliderNavigationColor' => array(
				'label' => 'Navigation button color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba"',
				'text' => ''
			),
			'sliderNavigationColorOver' => array(
				'label' => 'Navigation button color (over)',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba"',
				'text' => ''
			),
			'sliderNavigationIconColor' => array(
				'label' => 'Navigation button Icons color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba"',
				'text' => ''
			),
			'sliderNavigationIconColorOver' => array(
				'label' => 'Navigation button Icons color (over)',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba"',
				'text' => ''
			),
			'sliderItemTitleEnable' => array(
				'label' => 'Show Items Title',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => ''
			),
			'sliderItemTitleFontSize' => array(
				'label' => 'Item Title - font Size',
				'tag' => 'input',
				'attr' => 'type="number" min="11" max="34" step="1"',
				'text' => ''
			),
			'sliderItemTitleTextColor' => array(
				'label' => 'Item Title text color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'sliderThumbBarEnable' => array(
				'label' => 'Show Items Thumbnails',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => '',
				'premium' => true
			),
			'sliderThumbBarHoverColor' => array(
				'label' => 'Thumbnails Border Color (select mode)',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => '',
				'premium' => true
			),
			'sliderThumbSubMenuBackgroundColor' => array(
				'label' => 'Item Submenu Button color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba"',
				'text' => ''
			),
			'sliderThumbSubMenuIconColor' => array(
				'label' => 'Item Submenu Button Icon color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba"',
				'text' => ''
			),
			'sliderThumbSubMenuBackgroundColorOver' => array(
				'label' => 'Item Submenu Button color (over)',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba"',
				'text' => ''
			),
			'sliderThumbSubMenuIconHoverColor' => array(
				'label' => 'Item Submenu Button Icon color (over)',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba"',
				'text' => ''
			),
			'sliderInfoEnable' => array(
				'label' => 'Item Info button',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => ''
			),
			'sliderPlayButton' => array(
				'label' => 'Slideshow Play Button Show',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => '',
				'premium' => true
			),
			'slideshowDelay'      => array(
				'label' => 'Slideshow Delay',
				'tag'   => 'input',
				'attr'  => 'type="number" min="1" data-sliderPlayButton="is:1"',
				'text'  => 'Delay between change slides in seconds',
				'premium' => true
			),
			'slideshowProgressBarColor' => array(
				'label' => 'Slideshow progress bar color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba" data-sliderPlayButton="is:1"',
				'text' => '',
				'premium' => true
			),
			'slideshowProgressBarBGColor' => array(
				'label' => 'Slideshow progress bar Background color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="rgba" data-sliderPlayButton="is:1"',
				'text' => '',
				'premium' => true
			),
			'sliderZoomButton' => array(
				'label' => 'Zoom Button Show',
				'tag' => 'checkbox',
				'attr' => '',
				'text' => ''
			),
			'sliderItemDownload' => array(
				'label' => 'Item Download button',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => '',
				'premium' => true
			),
			'sliderSocialShareEnabled' => array(
				'label' => 'Item Share button',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => ''
			),
			'sliderLikesEnabled' => array(
				'label' => 'Item Like button',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => ''
			),
			'sliderFullScreen' => array(
				'label' => 'FullScreen Button Show',
				'tag' => 'checkbox',
				'attr' => '',
				'text' => ''
			),
		)
	),
	array(
		'label' => 'Advanced Settings',
		'fields' => array(
			'customCSS' => array(
				'label' => 'Custom CSS',
				'tag' => 'textarea',
				'attr' => 'cols="20" rows="10"',
				'text' => 'You can enter custom style rules into this box if you\'d like. IE: <i>a{color: red !important;}</i>
                                                                      <br />This is an advanced option! This is not recommended for users not fluent in CSS... but if you do know CSS, 
                                                                      anything you add here will override the default styles'
			)
			/*,
			'loveLink' => array(
				'label' => 'Display LoveLink?',
				'tag' => 'checkbox',
				'attr' => '',
				'text' => 'Selecting "Yes" will show the lovelink icon (codeasily.com) somewhere on the gallery'
			)*/
		)
	)
);
