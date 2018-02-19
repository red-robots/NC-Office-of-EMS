<?php
/**
 * Template part for displaying page content in index.php.
 *
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( "template-map" ); ?>>
        <h1><?php the_title();?></h1>
        <?php if(get_the_content()):?>
            <div class="copy">
                <?php the_content();?>
            </div>
        <?php endif;?>
    <div class="clear-bottom map-container">
        <div id="map">
            <img src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt=""
                 usemap="#map" border="0" class="map"/>
            <map name="map">
                <area shape="poly"
                      coords="5,215,5,183,12,178,13,182,23,181,33,175,35,158,42,150,47,150,48,145,54,143,62,139,77,139,81,137,84,139,93,139,100,131,105,130,110,124,117,126,119,121,120,119,127,117,132,111,139,107,151,110,161,96,157,90,165,86,171,90,174,76,192,69,195,73,194,77,199,85,208,80,214,72,220,67,226,63,235,61,240,58,242,60,247,63,252,67,255,63,259,62,273,41,275,44,273,49,283,57,283,64,293,71,285,83,273,79,269,87,273,95,272,99,265,105,277,117,283,136,289,129,293,131,297,135,297,167,290,189,233,187,229,190,222,188,219,185,213,191,210,191,189,198,185,197,185,200,181,202,179,205,176,205,175,203,149,211,101,216,7,215"
                      href="http://www.matrac.com/" target="_blank" alt="mactrac" class="mactrac">
                <area shape="poly"
                      coords="300,2,348,2,388,3,438,5,543,4,538,45,538,143,508,144,467,145,404,144,379,143,384,130,374,117,366,117,358,100,338,104,330,112,324,106,312,109,306,101,292,94,284,81,292,69,282,64,282,56,273,48,274,43,271,39,280,34,285,30,294,34,291,24,296,18,296,4"
                      href="http://triadpreparedness.org/" target="_blank" alt="thpc">
                <area shape="poly"
                      coords="546,263,562,244,561,235,560,220,550,206,536,204,536,194,530,190,528,191,512,192,503,188,499,191,490,192,487,194,478,193,482,191,477,176,482,162,476,156,474,149,470,150,467,144,398,144,379,142,382,129,374,116,368,117,358,100,336,104,331,111,324,105,312,109,306,100,292,94,284,81,272,78,268,84,271,93,271,99,264,104,275,116,281,133,287,128,295,132,296,164,289,189,324,190,338,191,366,195,370,198,370,205,382,198,398,222,397,238,522,238,544,262"
                      href="http://metrolinapreparedness.org/mhpc/" target="_blank" alt="mhpc">
                <area shape="poly"
                      coords="676,6,681,37,680,43,676,47,670,47,665,57,659,54,652,67,651,76,637,70,630,70,629,75,634,77,628,89,624,89,619,97,610,97,598,97,604,49,584,45,538,46,542,5,676,5"
                      href="http://trauma.duhs.duke.edu/regional-advisory-committee" target="_blank" alt="drac"
                      class="drac">
                <area shape="poly"
                      coords="694,167,681,170,679,174,669,178,656,179,650,172,645,181,624,179,592,185,574,178,578,173,569,167,568,162,564,159,560,150,566,143,575,137,586,129,594,132,597,139,604,141,633,105,650,76,651,67,658,55,664,57,668,47,674,47,679,43,690,45,698,45,700,49,706,49,712,52,685,105,685,110,693,115,698,131,704,133,694,165"
                      href="http://www.caprac.com/" target="_blank" alt="capRac">
                <area shape="poly"
                      coords="685,109,722,25,724,14,724,6,951,5,958,23,963,47,992,107,996,132,991,179,988,183,969,189,963,189,936,208,910,227,878,269,864,256,814,260,806,261,791,276,773,283,768,288,760,284,749,251,714,253,712,250,700,251,691,247,696,224,694,187,688,183,685,183,678,174,683,169,694,167,704,132,698,131,693,113,686,109"
                      href="http://easternhpc.com/" target="_blank"
                      alt="vidant">
                <area shape="poly"
                      coords="766,287,750,299,742,308,732,320,724,346,714,361,706,363,692,360,672,361,667,363,661,365,652,368,591,309,596,303,599,297,604,297,605,290,610,289,616,281,616,273,623,255,616,247,611,235,627,233,656,235,676,257,674,263,683,271,698,251,710,250,714,253,748,251,759,283,765,286"
                      href="http://southeasternhpc.org/" target="_blank" alt="shpr">
                <area shape="poly" coords="608,103,632,104,609,132,599,127,607,102"
                      href="http://trauma.duhs.duke.edu/regional-advisory-committee" target="_blank" alt="drac2"
                      class="drac">
                <area shape="poly"
                      coords="546,263,562,245,561,234,576,235,596,221,607,226,616,247,622,253,616,272,617,279,610,289,606,288,604,296,599,296,591,309,546,263"
                      href="http://trauma.duhs.duke.edu/regional-advisory-committee" target="_blank" alt="drac3"
                      class="drac">
                <area shape="poly"
                      coords="684,270,674,263,676,257,656,234,625,234,611,235,608,226,596,222,577,234,560,234,561,221,550,206,542,204,536,205,536,195,530,191,526,193,515,192,503,189,500,192,491,192,486,196,480,194,484,191,477,177,482,164,476,156,475,151,470,150,468,147,538,144,538,46,583,44,602,49,598,97,619,98,622,90,626,91,636,78,632,74,630,75,629,70,634,69,650,76,632,105,606,104,600,128,608,133,604,140,597,138,595,131,586,128,560,149,563,159,569,162,569,166,577,172,573,178,592,186,624,178,644,180,650,172,656,178,667,178,678,174,686,182,695,186,697,221,691,246,698,250,685,271"
                      href="http://www.midcarolinarac.com/" target="_blank" alt="mid carolina" class="mid-carolina">
                <area shape="poly"
                      coords="676,6,723,5,726,12,722,26,713,51,710,49,704,50,699,44,690,44,681,43,682,39,677,6" href="#"
                      alt="mid carolina" class="mid-carolina">
            </map>
        </div><!-- map -->
        <div class="list-container">
            <ul>
                <li>
                    <h2 class="color1">
                        <a class="mactrac" href="http://www.matrac.com/" target="_blank">
                            <div class="color-box color1b"></div>
                            <div class="co-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/mahpc.jpg"/></div>
                            <div class="down">Mountain Area Healthcare Preparedness Coalition (MAHPC)</div>
                        </a>
                    </h2>
                </li>
                <li>
                    <h2 class="color2">
                        <a href="http://triadpreparedness.org/" target="_blank">
                            <div class="color-box color2b"></div>
                            <div class="co-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/triad.png"/></div>
                            <div class="down">Triad Healthcare Preparedness Coalition (WFU Baptist/Moses Cone)</div>
                        </a>
                    </h2>
                </li>
                <li>
                    <h2 class="color3">
                        <a href="http://metrolinapreparedness.org/mhpc/" target="_blank">
                            <div class="color-box color3b"></div>
                            <div class="co-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/mhpc.png"/></div>
                            <div class="down">Metrolina Healthcare Preparedness Coalition (Carolinas Medical Center)
                            </div>
                        </a>
                    </h2>
                </li>
                <li>
                    <h2 class="color4">
                        <a href="http://trauma.duhs.duke.edu/regional-advisory-committee" target="_blank">
                            <div class="color-box color4b"></div>
                            <div class="co-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/duke.png"/></div>
                            <div class="down">Duke Healthcare Preparedness Coalition (Duke University Hospital)</div>
                        </a>
                    </h2>
                </li>
                <li>
                    <h2 class="color5">
                        <a href="http://www.midcarolinarac.com/" target="_blank">
                            <div class="color-box color5b"></div>
                            <div class="co-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/mid-carolina.png"/></div>
                            <div class="down">Mid Carolina Regional Healthcare Coalition (UNC Health Care)</div>
                        </a>
                    </h2>
                </li>
                <li>
                    <h2 class="color6">
                        <a href="http://www.caprac.com/" target="_blank">
                            <div class="color-box color6b"></div>
                            <div class="co-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/capital.png"/></div>
                            <div class="down">Capital RAC (WakeMed)</div>
                        </a>
                    </h2>
                </li>
                <li>
                    <h2 class="color7">
                        <a href="http://easternhpc.com/" target="_blank">
                        <div class="color-box color7b"></div>
                            <div class="co-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/vidant.png"/></div>
                            <div class="down">Eastern Healthcare Preparedness Coalition (Vidant Medical Center)</div>
                        </a>
                    </h2>
                </li>
                <li>
                    <h2 class="color8">
                        <a href="http://southeasternhpc.org/" target="_blank">
                        <div class="color-box color8b"></div>
                            <div class="co-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/shpr.png"/></div>
                            <div class="down">Southeastern Healthcare Preparedness Region (New Hanover Regional)</div>
                        </a>
                    </h2>
                </li>
            </ul>
        </div><!--list-->
    </div><!--.map-container-->
</article><!-- #post-## -->
