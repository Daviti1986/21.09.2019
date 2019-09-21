	
			<div class="menu">
				<?php
					$menu=[
						["name"=>"<a href=index.php> menu </a> ", "children" =>[]
			],
		["name"=>"<a href=contact.php> contact </a> ", "children" =>[]
			],
		["name"=>" <a href=about.php> about </a> ", 
			"children" =>[
				["name"=>" history ", "children" =>[
					["name"=>" about company ", "children" =>[]
						],
					["name"=>" history another ", "children" =>[]
						],
					],
				],
					["name"=>" web link ", "children" =>[]
						],
					["name"=>" address ", "children" =>[]
						],
			],
		],	
		["name"=>" <a href=gallery.php> gallery </a>", "children" =>[]
			],
				];
				function printmenu($array) {
					if (!is_array($array)) {
						return "";
					}
					$bildmenu="";
					foreach ($array as $key => $value) {
						$bildmenu .=
						"<li>
							".$value["name"]."
							<ul>
							".printmenu($value["children"])."
							</ul>
						</li>";
					}
					return $bildmenu;
				}
				echo "<ul >";
				$menuhtml=printmenu($menu);
				echo "</ul>";
				echo $menuhtml;
				echo "<br>";

				?>
			</div>


		
			
		