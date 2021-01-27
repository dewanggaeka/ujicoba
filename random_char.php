<?php 

	$randomchar = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 1);
	$kode = '12345';


	echo $kode.$randomchar;

 ?>

                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>Master</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="pages/ui/animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="pages/ui/badges.html">Badges</a>
                            </li>
                        </ul>
                    </li>