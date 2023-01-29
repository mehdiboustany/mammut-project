<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header class="o-section c-section--header">
		<div class="o-section__wrapper">
			<div class="c-header">
				<div class="c-header__logo">
					<a href="/" title="">
						<svg xmlns="http://www.w3.org/2000/svg" width="214.694" height="83.329" viewBox="0 0 214.694 83.329">
							<g id="Logo" transform="translate(0 -0.031)">
								<g id="Group_35" data-name="Group 35" transform="translate(0 67.512)">
									<path id="Path_133" data-name="Path 133" d="M7.19,272.227c-.044-.37-.1-.7-.17-1l-.238-.9-.252-.766-.3-.608L6.1,268.74a1.554,1.554,0,0,0-.378.441l-.268.468-.159.328L4.784,271l.884,2.2a5.672,5.672,0,0,1,.372,1.276l-.019.126a.979.979,0,0,1-.326.3,1.636,1.636,0,0,1-.52.23l-.413.126a1.1,1.1,0,0,1-.326.038,1.4,1.4,0,0,1-.345.038l-.353.008-.627-.041-.419-.093-.194-.038a1.545,1.545,0,0,1-1.144-1.5l.038-.413.126-.509.309-.884.432-.92-.022-.019a.189.189,0,0,0-.115-.022l-.1.022a4.572,4.572,0,0,0-.725.775,4.009,4.009,0,0,0-.512.911l-.315.731-.192.64-.126.49-.1.58-.06.859.038.6.153.536a2.567,2.567,0,0,0,1.7,1.311.783.783,0,0,0,.233.079l.17.027.3.049H3a4.675,4.675,0,0,0,.5-.03c.178-.019.331-.038.465-.066a4.977,4.977,0,0,0,.854-.257,4.222,4.222,0,0,0,1.4-1.018l.238-.468.29-.712.085-.211a.736.736,0,0,0,.049-.192l.085-.287.153-.547.057-.279.038-.4.03-.651-.019-.6-.049-.58Z" transform="translate(0 -262.672)" fill="#fff"/>
									<path id="Path_134" data-name="Path 134" d="M10.571,257.183l.8-.961.654-.807-.75-.487a4.8,4.8,0,0,1-1.1-.988l-.7.824a4.974,4.974,0,0,0-.766,1.084,5.846,5.846,0,0,0,1.114.865l.747.471Z" transform="translate(-6.326 -251.923)" fill="#fff"/>
									<path id="Path_135" data-name="Path 135" d="M74.873,250.407l.3.214.383.238.761.5.413-.5.591-.72.432.37.654.432.643.419.8-.969.651-.8-.75-.509a5.6,5.6,0,0,1-1.106-.977l-.449.526-.671.824-.6-.432A5.882,5.882,0,0,1,75.9,248.1l-.7.824A5.208,5.208,0,0,0,74.43,250a3.417,3.417,0,0,0,.443.411Z" transform="translate(-54.058 -247.681)" fill="#fff"/>
									<path id="Path_136" data-name="Path 136" d="M104.854,248.922l.69.49.747.5.807-.966.651-.8-.75-.509a5.671,5.671,0,0,1-1.1-.98l-.706.824a5.1,5.1,0,0,0-.761,1.073l.183.192.238.183Z" transform="translate(-75.846 -246.628)" fill="#fff"/>
									<path id="Path_137" data-name="Path 137" d="M55.277,253.5l-.682-.23-.583-.26-1.689-.862-.249-.085h-.257l-.241.019-.309.074a2.293,2.293,0,0,0-.452.186l-.449.334a1.51,1.51,0,0,0-.257.372,3.453,3.453,0,0,0-.43.961l-.2,1.007v.717l.164.068.372-.241a1.992,1.992,0,0,1,.394-.17,2.239,2.239,0,0,1,.38-.088h.422l1.076.142.881.192-.3.394a1.818,1.818,0,0,1-.326.285,1.757,1.757,0,0,1-.616.227h-4.16a.789.789,0,0,1-.233-.211L47.478,256V254.54l.036-.682v-.575l-.093-.413-.107-.175-.055-.134a7.44,7.44,0,0,0-.944,1.054l-.709.884.038,1.221v.517l.057.309H42.891a2.639,2.639,0,0,1-.411-.46,4.482,4.482,0,0,1-.386-.654l-.172-.4L41.8,254.6l-.057-.394-.019-.424.019-.3a.465.465,0,0,0-.517-.37,2.711,2.711,0,0,0-1.47.545,4.96,4.96,0,0,0-1.084,1.141,7.536,7.536,0,0,0-.449.983l-.192.764H33.861l-.077-1.41-.019-.884-.161-2.3-.06-1.47v-.947l-.016-.337-.044-.268a1.1,1.1,0,0,0-.216-.353,4.809,4.809,0,0,0-.775,1.015l-.753,1.163.057,1.2.041,1.5.134,2.08.161,4.319.077.2a.463.463,0,0,0,.23.041h4.582v-.005h0a3.548,3.548,0,0,0,1.018-1.308c.071-.213.148-.317.23-.317l2.006,1.631.747.586.268.189.3.145.183-.194.093-.222.194-.506h3.243l.257-.432.394-.846.2.474.148.257.134.189.353.285.219.074h4.341l.287-.074a1.2,1.2,0,0,0,.2-.205l.17-.23.2-.279,1.007-1.536a4.848,4.848,0,0,1,1.133-1.18l.613-.307a2.019,2.019,0,0,1,.6-.216,4.773,4.773,0,0,1,.873-.063l.712-2.264-.9-.057-.98-.172Zm-15.032,2.792-.671-.449a.7.7,0,0,1,.632-.43l.233.093a.644.644,0,0,1,.181.432l.079.334.022.307-.474-.287Z" transform="translate(-23.052 -248.023)" fill="#fff"/>
									<path id="Path_138" data-name="Path 138" d="M143.054,253.312a2.256,2.256,0,0,0-.742.95l-.6,1.076v.744l-.038.474h-1.084a7.8,7.8,0,0,1,.118-1.278l.257-1.505-.016-.1a1.551,1.551,0,0,0-.731.75l-.194.279-.112.208-.145.287-.189.422-.09.942h-1.631v-.413l.049-.23.249-1.067a6.335,6.335,0,0,0,.2-1.139.885.885,0,0,0-.161-.29l-.268.29-.482.61-.432.608-.151.227-.06.164-.1.616-.123.621h-4.067l-.074-1.41-.022-.884-.159-2.3-.06-1.47v-.947l-.019-.337-.044-.268a1.1,1.1,0,0,0-.216-.353,4.9,4.9,0,0,0-.775,1.015l-.75,1.163.057,1.2.038,1.5.134,2.08.164,4.319.074.2a.482.482,0,0,0,.233.041h5.324l.43-.432.038.3.134.137h2.064a.219.219,0,0,0,.219-.118l.224-.3.3.356.181.057h2.121a.749.749,0,0,0,.471-.583l.337-1.259.118-.621.074-.58v-2.912l-.038-.588-.055-.241Z" transform="translate(-94.708 -248.03)" fill="#fff"/>
									<path id="Path_139" data-name="Path 139" d="M201.407,248.891l.651.443.739.471.413-.471.594-.72.547.411.556.37.646.411.8-.958.654-.81-.766-.487a4.373,4.373,0,0,1-1.106-.98l-.452.509-.671.829-.6-.432a4.951,4.951,0,0,1-1.007-.906l-.72.827-.5.624-.268.449.222.222.268.2Z" transform="translate(-145.926 -246.57)" fill="#fff"/>
									<path id="Path_140" data-name="Path 140" d="M203.854,267.123l.126-.372.077-.367.118-.632a6.611,6.611,0,0,0,.055-.961v-.969a6.246,6.246,0,0,0-.353-1.571,3.33,3.33,0,0,0-.739-1.39,4.931,4.931,0,0,0-.517,1.1l-.545,1.467a4.733,4.733,0,0,1,.326.588l.145.345.115.372.126.413.038.23-.038.1h-4.875a1.606,1.606,0,0,1-1.141-.413,1.29,1.29,0,0,1-.468-.917l-.041-.788V263l.041-.394.151-.98-.268.019a3.18,3.18,0,0,0-.413.807,5.57,5.57,0,0,0-.375,1.106l-.142.6-.066.279-.008.268-.06,1.136.038.942.153.772a2.079,2.079,0,0,0,2.149,1.459h5.756l.334-.824.309-1.068Z" transform="translate(-141.713 -256.949)" fill="#fff"/>
									<path id="Path_141" data-name="Path 141" d="M239.043,266.083l-.257-1.163-.471-1.869-.142-.249a.257.257,0,0,0-.235-.162,1.559,1.559,0,0,0-.706.17,4.093,4.093,0,0,0-.788.523,6.718,6.718,0,0,0-1.119,1.265l-.287.512-.257.594-.405,1.062h-2.012l-.038-.586-.175-.824a9.216,9.216,0,0,0-.413-1.317l-.279-.575-.181-.29a.9.9,0,0,0-.662-.375,1.179,1.179,0,0,0-.884.454,1.479,1.479,0,0,0-.334.383l-.153.279-.068.178-.55,1.371a12.171,12.171,0,0,0-.353,1.2,1.759,1.759,0,0,0-.1.46l-.077.441-.038.317v.372l.019.432.079.334a1.981,1.981,0,0,0,.671.868,1.718,1.718,0,0,0,1.035.315l.224-.022.454-.1.227-.057a5.52,5.52,0,0,1-2.42,2.244,3.848,3.848,0,0,1-1.139.348,8.9,8.9,0,0,1-1.588.1l.1.194a9.06,9.06,0,0,0,2.778.939,8.925,8.925,0,0,0,.936.052h.432a1.2,1.2,0,0,0,.547-.378l.337-.337.238-.279a3.549,3.549,0,0,0,.567-1.16l.3-.838L232,270.3h2.66v-.775l.016-.063.375-1.133.862.6.8.509.531.337.651.287a7.493,7.493,0,0,0,.7-1.527l.26-.745.2-.657.06-.449-.022-.279-.057-.326Zm-8.488.72-.186-.038h-.153a3.013,3.013,0,0,1-.528-.268.721.721,0,0,1-.219-.375l.238-.3.309-.172a1.67,1.67,0,0,1,.315.153,1.841,1.841,0,0,1,.318.471,4.929,4.929,0,0,1,.172.49l-.268.038Zm5.595-1.39a.862.862,0,0,1,.632-.413l.194.057.145.183a.684.684,0,0,1,.074.268.729.729,0,0,1,.077.356l.019.315-1.139-.766Z" transform="translate(-163.865 -258.241)" fill="#fff"/>
									<path id="Path_142" data-name="Path 142" d="M290.082,256.207l-.057-.326-.257-1.163-.471-1.869-.145-.249a.255.255,0,0,0-.23-.162,1.57,1.57,0,0,0-.709.17,4.1,4.1,0,0,0-.788.523A6.719,6.719,0,0,0,286.3,254.4l-.287.512-.26.594-.413,1.081h-.386v-.019h-3.17l-.074-1.41-.022-.884-.162-2.3-.057-1.47v-.947l-.022-.337-.041-.268a1.075,1.075,0,0,0-.219-.353,4.9,4.9,0,0,0-.775,1.015l-.747,1.163.057,1.2.038,1.5.134,2.08.164,4.319.074.2a.475.475,0,0,0,.233.041H285.2a.394.394,0,0,0,.118-.118l.172-.3.1-.214.055-.205.375-1.133.862.6.8.509.531.337.649.287a7.206,7.206,0,0,0,.7-1.527l.257-.745.2-.657.06-.449-.022-.279Zm-2.953-1a.867.867,0,0,1,.632-.413l.2.057.142.183a.6.6,0,0,1,.074.268.73.73,0,0,1,.074.356l.022.315-1.139-.766Z" transform="translate(-203.121 -248.037)" fill="#fff"/>
								</g>
								<path id="Path_143" data-name="Path 143" d="M418.543,254.658l-1.741,1.284a3.948,3.948,0,0,0-1.38-.8,5.385,5.385,0,0,0-1.763-.279,6.158,6.158,0,0,0-2.557.545,4.723,4.723,0,0,0-1.9,1.442,3.108,3.108,0,0,0-.682,1.905,2.772,2.772,0,0,0,1.2,2.291,4.93,4.93,0,0,0,3.066.917,6.353,6.353,0,0,0,3.462-.925l1.415,1.481a10.083,10.083,0,0,1-5.031,1.218,8.613,8.613,0,0,1-3.419-.6,5.333,5.333,0,0,1-2.261-1.782,4.258,4.258,0,0,1-.849-2.546,4.626,4.626,0,0,1,1.007-2.817,6.833,6.833,0,0,1,2.732-2.121,9.079,9.079,0,0,1,3.758-.775,8.011,8.011,0,0,1,4.943,1.563m83.4,1.327h2.3l-.137.761a4.656,4.656,0,0,1,2.756-.955,3.111,3.111,0,0,1,2,.621,1.891,1.891,0,0,1,.78,1.552,8.706,8.706,0,0,1-.148,1.319l-.7,4.2h-2.3l.684-4.1a5.869,5.869,0,0,0,.1-.953.831.831,0,0,0-.326-.7,1.508,1.508,0,0,0-.92-.244,2.377,2.377,0,0,0-1.161.317,2.234,2.234,0,0,0-.892.89,7.7,7.7,0,0,0-.572,2.132l-.443,2.655h-2.3l1.273-7.5Zm-7.1-.194a5.467,5.467,0,0,1,2.28.465,3.69,3.69,0,0,1,1.6,1.311,3.334,3.334,0,0,1,.572,1.9,3.669,3.669,0,0,1-1.568,2.978,6.088,6.088,0,0,1-3.879,1.229,4.931,4.931,0,0,1-3.205-.969,3.1,3.1,0,0,1-1.2-2.529,3.814,3.814,0,0,1,1.62-3.137,6.015,6.015,0,0,1,3.777-1.251m-.167,1.746a2.846,2.846,0,0,0-2.179.807,2.551,2.551,0,0,0-.755,1.754,1.66,1.66,0,0,0,.621,1.352,2.482,2.482,0,0,0,1.65.515,2.967,2.967,0,0,0,2.228-.783A2.469,2.469,0,0,0,497,259.4a1.64,1.64,0,0,0-.646-1.347,2.618,2.618,0,0,0-1.683-.517m-7.2-4.615a1.554,1.554,0,0,1,1.013.337.977.977,0,0,1,0,1.6,1.585,1.585,0,0,1-1.013.337,1.554,1.554,0,0,1-1.007-.337.981.981,0,0,1,0-1.6,1.564,1.564,0,0,1,1.007-.337m-1.437,3.063h2.285l-1.262,7.5h-2.3ZM481.5,253.2h2.3l-.484,2.781h1.462l-.276,1.585h-1.456l-1.013,5.915h-2.313l1.024-5.915h-1.139l.268-1.585h1.133l.49-2.781Zm-3.233,4.333-1.96.846a3,3,0,0,0-2.231-.838,4.128,4.128,0,0,0-1.675.32,2.755,2.755,0,0,0-1.158.925,2.167,2.167,0,0,0-.435,1.284,1.667,1.667,0,0,0,.687,1.39,3.025,3.025,0,0,0,1.878.52,3.418,3.418,0,0,0,2.537-.887l1.82,1.021a5.442,5.442,0,0,1-1.919,1.144,7.481,7.481,0,0,1-2.559.413,5.617,5.617,0,0,1-3.468-.961,3.043,3.043,0,0,1-1.27-2.548,3.867,3.867,0,0,1,1.568-3.093,6.207,6.207,0,0,1,4.037-1.278,4.964,4.964,0,0,1,4.149,1.746m-18.366-1.552h2.288l-.632,3.835a5.828,5.828,0,0,0-.1.95,1.024,1.024,0,0,0,.43.832,1.781,1.781,0,0,0,1.125.337,1.988,1.988,0,0,0,1.374-.432,3.136,3.136,0,0,0,.7-1.763l.649-3.758h2.285l-.682,4.032a4.958,4.958,0,0,1-.786,2.11,3.5,3.5,0,0,1-1.462,1.15,5.3,5.3,0,0,1-2.14.4,4.375,4.375,0,0,1-2.751-.794,2.484,2.484,0,0,1-1.024-2.058,11.986,11.986,0,0,1,.216-1.984l.5-2.852Zm-6.268,0H455.7l-.161,1.021a2.741,2.741,0,0,1,2.225-1.215,1.731,1.731,0,0,1,.649.134l-.832,1.661a1.834,1.834,0,0,0-.38-.063,1.523,1.523,0,0,0-1.191.624,5.569,5.569,0,0,0-.824,2.521l-.452,2.819h-2.321l1.232-7.5Zm-4.253-2.781h2.3l-.484,2.781h1.464l-.276,1.585h-1.456l-1.013,5.915h-2.31l1.021-5.915H447.5l.268-1.585h1.13l.487-2.781Zm-3.12,3.829-1.1,1.4a2.834,2.834,0,0,0-.889-.736,1.9,1.9,0,0,0-.873-.241.979.979,0,0,0-.526.137.382.382,0,0,0-.219.312.447.447,0,0,0,.17.328,6.264,6.264,0,0,0,1,.641,6.318,6.318,0,0,1,1.749,1.3,1.9,1.9,0,0,1,.419,1.174,2.09,2.09,0,0,1-.862,1.577,3.7,3.7,0,0,1-2.5.745,4.732,4.732,0,0,1-1.719-.3,6.356,6.356,0,0,1-1.727-1.111l1.426-1.319a2.9,2.9,0,0,0,2.121,1.021,1.34,1.34,0,0,0,.734-.178.505.505,0,0,0,.274-.416.575.575,0,0,0-.205-.4,7.286,7.286,0,0,0-1.136-.728,6.512,6.512,0,0,1-1.478-1.04,1.846,1.846,0,0,1-.572-1.281,1.78,1.78,0,0,1,.9-1.541,3.762,3.762,0,0,1,2.119-.591,4.146,4.146,0,0,1,1.626.326,3.342,3.342,0,0,1,1.281.917m-15.815-1.051h2.307l-.137.761a4.648,4.648,0,0,1,2.754-.955,3.117,3.117,0,0,1,2,.621,1.9,1.9,0,0,1,.783,1.552,8.831,8.831,0,0,1-.151,1.319l-.7,4.2h-2.3l.684-4.1a6.669,6.669,0,0,0,.1-.953.828.828,0,0,0-.326-.7,1.511,1.511,0,0,0-.922-.244,2.36,2.36,0,0,0-1.158.317,2.223,2.223,0,0,0-.9.89,7.694,7.694,0,0,0-.572,2.132l-.441,2.655h-2.3l1.27-7.5Zm-6.224-.194a5.5,5.5,0,0,1,2.283.465,3.682,3.682,0,0,1,1.6,1.311,3.336,3.336,0,0,1,.575,1.9,3.679,3.679,0,0,1-1.571,2.978,6.082,6.082,0,0,1-3.879,1.229,4.934,4.934,0,0,1-3.2-.969,3.088,3.088,0,0,1-1.2-2.529,3.812,3.812,0,0,1,1.618-3.137,6.02,6.02,0,0,1,3.777-1.251m-.167,1.746a2.853,2.853,0,0,0-2.182.807,2.548,2.548,0,0,0-.753,1.754,1.668,1.668,0,0,0,.621,1.352,2.487,2.487,0,0,0,1.65.515,2.974,2.974,0,0,0,2.231-.783,2.477,2.477,0,0,0,.761-1.785,1.64,1.64,0,0,0-.646-1.347,2.618,2.618,0,0,0-1.683-.517" transform="translate(-294.946 -183.67)" fill="#fff" fill-rule="evenodd"/>
								<path id="Path_144" data-name="Path 144" d="M158.39,79.094,296.3,63.9l31.945,16.735L296.3,70.037Z" transform="translate(-115.037 -46.387)" fill="#ed1c24" fill-rule="evenodd"/>
								<path id="Path_145" data-name="Path 145" d="M300.72,105.519l98.955-5.439,33.021,8.3-33.029-2.68Z" transform="translate(-218.409 -72.665)" fill="#fff" fill-rule="evenodd"/>
								<path id="Path_146" data-name="Path 146" d="M164.328,159.828l-.98-8.326c-.074-.641-.12-1.278-.181-1.913s-.118-1.278-.156-1.919c-.09.6-.222,1.24-.389,1.919s-.378,1.39-.621,2.16l-2.576,8.08h-4.8l-2.576-8.08c-.246-.772-.465-1.492-.63-2.16s-.29-1.314-.38-1.919c-.052.649-.1,1.289-.161,1.921s-.1,1.27-.178,1.911l-.977,8.326H141.81l3.832-21.016h8.326l1.6,5.2c.049.161.129.405.233.728a29.926,29.926,0,0,1,1.24,5.411h.137q.185-1.33.553-2.844c.246-1,.567-2.132.98-3.383l1.675-5.11h8.3l3.558,21.016h-7.913Zm139.99,0V145.686h-4.486v-6.873h17.041v6.873h-4.489v14.143h-8.069Zm-30.412-9.621v-11.4h8.064v11.452a5.264,5.264,0,0,0,.509,2.748,2.344,2.344,0,0,0,3.46-.019,5.206,5.206,0,0,0,.52-2.729V138.81h8.064v11.4a18.062,18.062,0,0,1-.312,3.69,6.715,6.715,0,0,1-1.007,2.431,8.749,8.749,0,0,1-3.679,3.011,14.063,14.063,0,0,1-10.656,0,8.745,8.745,0,0,1-3.679-3.011,6.607,6.607,0,0,1-.977-2.4,18.447,18.447,0,0,1-.309-3.714M261.3,159.831l-.977-8.326c-.077-.64-.126-1.278-.186-1.913s-.112-1.278-.153-1.919c-.09.6-.222,1.24-.391,1.919s-.375,1.39-.621,2.16l-2.573,8.08h-4.8l-2.573-8.08c-.244-.772-.468-1.492-.627-2.16s-.293-1.314-.38-1.919q-.078.973-.161,1.921c-.057.632-.1,1.27-.178,1.91l-.98,8.326h-7.913l3.829-21.016h8.326l1.6,5.2c.049.161.131.405.23.728A30.206,30.206,0,0,1,254,150.153h.134a28.658,28.658,0,0,1,.558-2.844c.244-1,.567-2.132.977-3.383l1.675-5.11h8.3l3.558,21.016H261.3Zm-33.987,0-.98-8.326c-.074-.64-.12-1.278-.181-1.913s-.115-1.278-.156-1.919c-.09.6-.222,1.24-.389,1.919s-.378,1.39-.624,2.16l-2.576,8.08h-4.8l-2.576-8.08c-.246-.772-.465-1.492-.63-2.16s-.293-1.314-.38-1.919c-.052.649-.1,1.289-.161,1.921s-.1,1.27-.178,1.91l-.977,8.326h-7.913l3.829-21.016h8.326l1.6,5.2c.047.161.129.405.233.728a30.161,30.161,0,0,1,1.24,5.411h.134q.189-1.33.553-2.844c.246-1,.569-2.132.98-3.383l1.675-5.11h8.3l3.561,21.016h-7.913Zm-40.49-7.639h3.356l-.684-2.381c-.348-1.207-.569-2.138-.692-2.789a15.207,15.207,0,0,1-.233-1.834h-.134a13.724,13.724,0,0,1-.227,1.834c-.126.649-.342,1.585-.693,2.789l-.69,2.381Zm-10.7,7.639,8-21.016H193.1l7.85,21.016h-8.677l-.723-2.641h-6.087l-.69,2.641Z" transform="translate(-102.995 -100.794)" fill="#fff" fill-rule="evenodd"/>
								<path id="Path_147" data-name="Path 147" d="M38.579,9.81a30.436,30.436,0,0,1,4.437-.6c6.553.142,6.993,7.68,2.866,12.339-2.882,3.249-6,4.089-10.051,3.514a17.729,17.729,0,0,0-4.648.036c-.813.293-2.138,1.076-2.012.854.859-1.5,4.962-2.3,6.148-3.9,2.406-2.849,3.26-8.63,3.26-12.243m-.531,15.725c9.473.06,13.59-11.562,8.518-15.533a6.571,6.571,0,0,0-3.6-1.026,27.3,27.3,0,0,0-4.141.561c-.178.016-.172-.679.093-.78a23.654,23.654,0,0,1,4.368-1.109c4.916-.512,8.321,3.394,8.274,8.343a14.656,14.656,0,0,1-2.513,8.132c-4.741,5.978-11.192,6.186-17.835,5.6a13.233,13.233,0,0,0-1.973-.556c-.484,0-.022-1.954.131-2.244.848-2.617,5.975-1.407,8.674-1.39m-12.2-1.82V23.8c2.006-.233,8.644-15.284,6.971-16.571-.285-.246-1.585,1.489-1.4.955.244-.717,1.546-3.2,2.439-2.313,1.763.955-4.032,27.886-9.366,21.1-.931-.474-1.092-3.3-.115-3.783.542-.556,1.73-.567,1.47.517m-4.746-5.455a1.885,1.885,0,0,0-.172,1.859c1.207.515.8-2.409.172-1.859m-.961.213c.044-.137.6-1.067.753-1.084,1.1-.493,1.494,3.649.066,3.649-.925,0-1.188-1.965-.821-2.565m2.269,6.588c-.857-.107-.736-3.167.328-3.739a7.5,7.5,0,0,1,1.763-1.363c.646-.411,1.782.564,2.086.983.055.047.057.621-.129.621-.14,0-.9-.3-.9-.435-.717-.7-1.286.408-2.061.84-.8.714-.654,1.412-.78,2.359,0,0,.181.794-.3.736m-.709,1.582c.246.049.432.534.432.7a32.117,32.117,0,0,0-.222,3.569c.4,1.371.424,2.535.791,3.673A5.1,5.1,0,0,1,23.279,36a6.5,6.5,0,0,1,.843,2.844,12.253,12.253,0,0,1,.118,2.411c.164,1.166-.654.194-.709-.432a.092.092,0,0,1-.005-.06.23.23,0,0,1-.011-.1,4.949,4.949,0,0,1,.008-.9c0-1.374-.725-2.652-1.007-3.952-.361-.936-1.275-2.225-1.3-3.222V32.6a2.8,2.8,0,0,1-.129-.569,9.59,9.59,0,0,1-.186-2.526,3.461,3.461,0,0,1,.085-1.251c0-.107.315-2.017.7-1.62m-8.43,3.109c.61.769-2.108,3.61-2.671,4.01a14.645,14.645,0,0,1-1.018,1.686C8.895,36.251,6.8,40.2,6.44,40.2c-1.01,0,1.421-3.758,1.494-4.054,0,.005,1.147-1.62,1.24-1.73.361-.4.832-1.363,1.3-1.612a8.8,8.8,0,0,0,2.255-2.7c.044-.224.345-.775.531-.356m14.219.008c.616.211-.044,5.247-.044,5.948,0,.493-.753,3.542-1.286,3.542s-.137-1.295-.038-1.484a37.255,37.255,0,0,0,.862-7.032c.016-.266.09-1.128.506-.974M6.128,41.268c.493-.011,1.081,1.133,1.259,1.514.213.449.753.928.955,1.382a14.114,14.114,0,0,0,1.921,1.768,18.08,18.08,0,0,1,3.542,2.086c.115.1-.022.361-.1.23a5.169,5.169,0,0,1-1.963-.7,9.247,9.247,0,0,1-3.282-2.058,9.913,9.913,0,0,1-1.908-2.682,5.1,5.1,0,0,1-.539-1.388v.019c-.057-.09.014-.23.12-.17M21,56.957c.1.005.4-.066.424-.049.542,0,1.125-.085,1.295-.665,0-.911-.739-.657-1.174-.244-.019.038-.211-.222-.372-.222s-.783.454-.783.38a1.574,1.574,0,0,0-.972-.427l.025-.03c-.183.2-.985-.285-1.111.129v-.011c-.041,1.141,1.919,1.1,2.663,1.133v.005Zm1.982-1.243c1.182-1.842-.238-3.769.033-5.69a26.518,26.518,0,0,0,.558-4.045c-.1-2.548-1.155-4.33-3.159-8.14a24.014,24.014,0,0,0-2.63-3.339,6.789,6.789,0,0,0-1.344-.884c-2.469-1.144-3.72,2.688-3.848,4.76-.093,2.5,2.154,5.365,4.037,7.19,1.692,1.637,2.855,5.882,1.869,8.129-.109.865-.714.95.159,1.757.266.047.427.126.643.014.315-.318,1.04-.005,1.256.238.293-.208.892-.49,1.207-.266.443-.318.753.005,1.218.274m.818,2.732c.118.257.92.449,1.267.575h0c.482.109.95-.027,1.415.057h.036a1.02,1.02,0,0,0,.84-.23.744.744,0,0,0,.493.085c.118-.014.238-.03.359-.047,1.024-.131-.211-1.538-.766-.8a.111.111,0,0,1-.189.03c-.709-.6-.879.422-1.319-.219-.523-.432-2.135-.148-2.135.553m-10.385-.282a1.117,1.117,0,0,1-.153.172c-.61.742,2.053.736,2.42.512.268.3,1.371.074,1.754.1,1.588-.09.457-1.489-.29-1.013-.222.186-.3.079-.55.005-.17,0-.717.178-.731.118-.353-.657-2.015-.164-2.45.107M11.336,57.4c-.454-.167-.591.213-1.051.008-.17-.049-.78.252-.78.2,0-.235-.309-.17-.4-.265l.014.014c-.484,0-2.7.657-1.993,1.2l.312-.016a5.543,5.543,0,0,0,1.891-.082l.118.066H9.437a1.074,1.074,0,0,0,.914-.1c.383.424,2.067-.016.983-1.021m6.183-23.994c2.986,1.648,6.024,8.187,6.777,11.5A10.893,10.893,0,0,1,24.16,47.7a9.084,9.084,0,0,0-.517,3.378A18.6,18.6,0,0,1,24,54.557c-.416,2.6-1.607,2.74-3.32,2.74-.074.339,1.1.761,1.363.881a1.744,1.744,0,0,0,1.815-.7c.649-.687,1.965.4,2.655.027.405-.394.586-.005,1,.055.515-.255.4-.233.9.036-.038-.126.4-.038.287-.282-.446-.728-1.834-1.311-1.782-2.231.276-1.215.7-2.244.148-3.471h-.014c-.389-.851.181-2.217.46-3.082a6.407,6.407,0,0,0,.922-3.468c1.18-3.055,2.532-4.834,2.023-8.939C29.5,38.52,28.81,40,28.364,41.175a11.161,11.161,0,0,1-2.34,3.928,4.424,4.424,0,0,1-.545.5c-.361.293-.859.326-.553.019.38-.386.684-1.292,1.757-3.087a18.34,18.34,0,0,0,.862-1.681c.454-.953.862-2.266,1.281-3.243a18.138,18.138,0,0,0,.857-1.711c.093-.394.471-.569.643-.9.222-.424.246-1,.43-1.459a11.782,11.782,0,0,0,.5-2.343c.088-.5-.022-.4-.022-.818,7.916.487,16.844-.665,19.68-9.265,1.412-4.292,1.38-10.127-2.962-12.692-2.789-1.648-6.29-.963-9.134.213.561-6.925,1.64-5.983,7.5-4.371-.353-1.292.553-1.514.282-2.231C44.4.5,40.339-1.067,38.147,1.082c-2.19,2.712-2.431,7.847-4.16,10.962.181-.591.958-5.118.375-6.211-1.642-1.93-2.912,1.659-3.2,2.677.047.109.033.222.2.131a8.937,8.937,0,0,1,1.273-.928c1.191.476-2.3,7.8-3.194,9.657a.078.078,0,0,1-.022.06c-.493.928-1.415.361-2.08.736-3.933,1.043-2.756.186-4.653-1.568-.189-.079-.832-.2-.588-.405a1.673,1.673,0,0,1,1.845.282c.353.435.482.928.829,1.377a.9.9,0,0,0,1.095.019c1.259-.843,2.51-.558,2.918-.849.06-.044.213-.093.241-.151.038-.074-.066-.153-.077-.238-.9-.361-.734-.89-1.317-1.615-.112-.233-.405-.758-.635-.665-.326.131-.963-.5-1.363-.673-.334-.142-.3-.353-.6-.422a4.382,4.382,0,0,0-2.937.528c-.047.022-.594.43-.635.452-.61.337-.482.638-.835,1.092-.205.268-.435.734-.646,1.032-.279.4-.621.736-.89,1.119a3.294,3.294,0,0,0-.777,2.406,9.982,9.982,0,0,1,.953,2.239c1.106,1.36-.334,4.56-.994,6.041-3.326,4.388-6.033-2.091-6.988-1.015-.818,1.1-.446,2.348-1.262,3.457C9.04,31.685,8.5,32.567,7.458,33.593a26.725,26.725,0,0,0-2.986,4.85c-.3.651-3.235,7.043.29,8.433.454.638.1.523.287,1.234a6.534,6.534,0,0,0,1.415,3.714l-.309.974c.049.764.145,1.511.249,2.269A11.108,11.108,0,0,0,6.007,57c-.6.939-.364,1.114.772,1.018A3.145,3.145,0,0,1,8.7,57.143c-.036-.161.728-.276.89.027.367-.192.591-.411,1.007-.224.367,0,.474.241.493-.159-.09-.558-.186-.98-.266-1.538h-.014c-.027-1.087.463-2.017.222-3.131a7.7,7.7,0,0,0,.824-2.852l.222-.569H12.1l.074.375H12.16l.074,1.024c.2.63.807,1.82.37,2.4-.561.922.172,1.607.131,2.565v-.016l-.326,1.314v-.014A6.063,6.063,0,0,0,12.16,58c.189.411.709-.071.931.03a2.9,2.9,0,0,1,2.773-.52c.353-.049.769-.249,1.147.057-.011-.137.775-.156.821-.033-.5-.616-.49-.534-.271-1.259h-.008a1.347,1.347,0,0,0-.033-.627h-.011l-.09-.189c.036.025.186-1.215.29-1.412,1.39-8.493-4.368-8.66-5.5-13.869-.682-2.381-.539-4.163.769-5.737.594-1.084,1.763-2.053,2.992-1.6a5.193,5.193,0,0,1,1.538.591M22.227,56.38a.522.522,0,0,1-.307.09c-.517.3-.109-.334.222-.443.257-.142.312.337.082.353m-.906-.131c.26.474-1.125.413-.441.1.052-.06.534-.265.441-.1m-1.815-.12a.888.888,0,0,1,.591.3c.334.183-.257.145-.367.145-.531.172-.49-.534-.224-.446M25.1,58.361c0-.449.564-.3.761-.074.391.222.06.662-.364.441H25.5c-.3,0-.4,0-.4-.367m1.837.326a.529.529,0,0,1-.134.019H26.8c-.071,0-.479.126-.318-.123.23-.8.731.068.449.1m.624-.186c-.1-.285.326-.276.465-.17.588.205-.463.35-.465.17m-12.2.1c-.123.038-1.245.055-.668-.227a1.284,1.284,0,0,1,.43-.211c.422-.222.558.422.238.438m1.21-.027a.976.976,0,0,1-.271.049l.014-.016c-.109.093-.523-.049-.312-.1.063-.057.545-.3.61-.216.079.027.016.282-.041.282m.457-.044c.266-.747,1.27.213.561.036h0c-.06,0-.361-.008-.361-.008a1.309,1.309,0,0,1-.2-.027m-5.663-.452c-.057.068-.52.047-.6.047h0c-.044,0-.183.041-.183-.03,0-.479,1.062-.287.788-.019m-1.754.09c.068-.208.739-.536.63-.222,0,.074-.049.227-.137.227h.005a.457.457,0,0,1-.1.016h0a.247.247,0,0,1-.036.005l.005-.008a.052.052,0,0,1-.022.011h0a.933.933,0,0,1-.345-.03M8.3,58.162a1.161,1.161,0,0,1,.389-.326.335.335,0,0,1,.1-.044c0-.005.014-.005.019-.005h0c.3-.326.706.493.047.408-.153,0-.884-.036-.868-.041l.312.005Zm2.088-34.313c-.594-1.013,4.185-5.663,6.5-4.724a11.222,11.222,0,0,1,1.67,2.748c.635,1.694.947,2.138-.361,4.029-.6.432.2,3-2.912,2.921-.766-.019-4.719-3.487-4.9-4.971" transform="translate(-2.208 0)" fill="#fff" fill-rule="evenodd"/>
							</g>
						</svg>
					</a>
				</div>

				<ul class="c-hedaer__menu">
					<li>
						<a href="/home/" title="">صفحه اصلی</a>
					</li>
					<li>
						<a href="#" title="">درباره ما</a>
					</li>
					<li>
						<a href="/sales/" title="">فروش</a>
					</li>
					<li>
						<a href="#" title="">پروژه ها</a>
					</li>
					<li>
						<a href="#" title="">خدمات</a>
					</li>
					<li>
						<a href="#" title="">رویدادها</a>
					</li>
					<li>
						<a href="#" title="">مقالات</a>
					</li>
					<li>
						<a href="#" title="">تماس با ما</a>
					</li>
				</ul>

				<div class="c-header__fixed">
					<div class="c-login-btn">
						<a href="/home/#register" title="">ورود و ثبت نام</a>
					</div>

					<div class="c-search__btn">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="29.985" viewBox="0 0 30 29.985">
							<g id="search" transform="translate(0.001 -0.002)">
								<path id="Path_1" data-name="Path 1" d="M27.3,29.986a1.742,1.742,0,0,0-.139-.18q-3.829-3.833-7.661-7.663c-.041-.041-.085-.08-.135-.128A12,12,0,0,1,9.22,23.987a11.943,11.943,0,0,1-7.056-4.9,12.18,12.18,0,1,1,19.869.255c.046.053.092.113.144.165q3.809,3.811,7.621,7.62a2.219,2.219,0,0,0,.2.16v.059l-2.636,2.636H27.3ZM12.167,20.613a8.436,8.436,0,1,0-8.414-8.466,8.449,8.449,0,0,0,8.414,8.466Z" transform="translate(0)" fill="#bf0e0e"/>
							</g>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</header>