<?php
	$type = empty($_GET['content']) ? 'snares' : $_GET['content'];

	header("Content-type: text/javascript");
	switch ($type) {
		case 'snares':
			$info = array(
			
				array(
					"class" => "snare", 
					"name" => "808", 
					"audio" => "sounds/snares/808.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "Dark", 
					"audio" => "sounds/snares/Dark.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "Analog", 
					"audio" => "sounds/snares/snr_analogging.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "8Bit", 
					"audio" => "sounds/snares/snr_answer8bit.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "Bland", 
					"audio" => "sounds/snares/snr_bland.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "909", 
					"audio" => "sounds/snares/snr_drm909kit.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "Real", 
					"audio" => "sounds/snares/snr_dwreal.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "Housey", 
					"audio" => "sounds/snares/snr_housey.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "MPC", 
					"audio" => "sounds/snares/snr_mpc.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "Classic", 
					"audio" => "sounds/snares/snr_myclassicsnare.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "Royalty", 
					"audio" => "sounds/snares/snr_royalty.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "Clean", 
					"audio" => "sounds/snares/snr_rusnarious.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "Home", 
					"audio" => "sounds/snares/prc_home.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "Vintage", 
					"audio" => "sounds/snares/snr_truevintage.wav", 
					"type" => "audio/wav"
					)
			);
		break;

		case 'hats':
			$info = array(
			
				array(
					"class" => "hat", 
					"name" => "Ace", 
					"audio" => "sounds/hats/hat_ace.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Analog", 
					"audio" => "sounds/hats/hat_analog.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Big Deal", 
					"audio" => "sounds/hats/hat_bigdeal.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Classic House", 
					"audio" => "sounds/hats/hat_classichousehat.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Soft", 
					"audio" => "sounds/hats/Hat_Closed_04.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Closed", 
					"audio" => "sounds/hats/Hat_Closed_07.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Cuppa", 
					"audio" => "sounds/hats/hat_cuppa.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Rough", 
					"audio" => "sounds/hats/Hat_Open_02.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Smooth", 
					"audio" => "sounds/hats/Hat_Open_04.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Jules", 
					"audio" => "sounds/hats/ride_jules.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "MPC", 
					"audio" => "sounds/hats/ride_mpc60.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Rise", 
					"audio" => "sounds/hats/Schat26.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Sharp", 
					"audio" => "sounds/hats/Schat92.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Average", 
					"audio" => "sounds/hats/Schat95.wav", 
					"type" => "audio/wav"
					)
			);
		break;

		case 'kicks':
			$info = array(
			
				array(
					"class" => "kick", 
					"name" => "808 Sub", 
					"audio" => "sounds/kicks/_trap-808-41.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "808 Kick", 
					"audio" => "sounds/kicks/808(22).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "909", 
					"audio" => "sounds/kicks/bd_909dwsd.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "Deep House", 
					"audio" => "sounds/kicks/bd_deephouser.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "Flir", 
					"audio" => "sounds/kicks/bd_flir.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "Hybrid", 
					"audio" => "sounds/kicks/bd_hybrid.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "Mirror", 
					"audio" => "sounds/kicks/bd_mirror.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "Outdoor", 
					"audio" => "sounds/kicks/bd_outdoor.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "Deep", 
					"audio" => "sounds/kicks/bd_sodeep.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "Vinyl Stereo", 
					"audio" => "sounds/kicks/bd_vinylinstereo.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "Loud", 
					"audio" => "sounds/kicks/Rodogki-Final.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "Silky", 
					"audio" => "sounds/kicks/Silkyd.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "Solid", 
					"audio" => "sounds/kicks/Solidas.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "Short Low", 
					"audio" => "sounds/kicks/trap-808-27.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "Yeezus", 
					"audio" => "sounds/kicks/trap-808-43.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "808 Sub Low", 
					"audio" => "sounds/kicks/trap-808-44.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "808 Kick Low", 
					"audio" => "sounds/kicks/trap-808-45.wav", 
					"type" => "audio/wav"
					)
			);
		break;

		case 'percs':
			$info = array(
			
				array(
					"class" => "perc", 
					"name" => "808 Rim", 
					"audio" => "sounds/percs/808_Rim_03.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "808 Rim 2", 
					"audio" => "sounds/percs/prc_808rimmer.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Timpani", 
					"audio" => "sounds/percs/808_Timpani.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Bomb Knock", 
					"audio" => "sounds/percs/Bomb_Knock.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Digital", 
					"audio" => "sounds/percs/Digi_Perc_01.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Digital 2", 
					"audio" => "sounds/percs/Digi_Perc_04.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Bongo Drum", 
					"audio" => "sounds/percs/prc_bongodrm.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Bongo Rock", 
					"audio" => "sounds/percs/prc_bongorock.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Boxed", 
					"audio" => "sounds/percs/prc_boxed.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Change", 
					"audio" => "sounds/percs/prc_change.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Clav", 
					"audio" => "sounds/percs/prc_clav.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Synthetic Clav", 
					"audio" => "sounds/percs/prc_syntheticlav.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Congaz", 
					"audio" => "sounds/percs/prc_congaz.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "More Cowbell", 
					"audio" => "sounds/percs/prc_dnthavacowman.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Drop Hit", 
					"audio" => "sounds/percs/prc_drop.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Smack", 
					"audio" => "sounds/percs/prc_emtythepot.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Bucket", 
					"audio" => "sounds/percs/prc_flickingabucket.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Harmony", 
					"audio" => "sounds/percs/prc_harmony.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "High Hit", 
					"audio" => "sounds/percs/prc_hit.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Pop", 
					"audio" => "sounds/percs/prc_itgoespop.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Jungle Bongo", 
					"audio" => "sounds/percs/prc_change.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "High Knock", 
					"audio" => "sounds/percs/prc_knockknock.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Reworked", 
					"audio" => "sounds/percs/prc_reworked.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Tomboy", 
					"audio" => "sounds/percs/prc_u5510n.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Panned", 
					"audio" => "sounds/percs/prc_youpanit.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Shaker", 
					"audio" => "sounds/percs/shaker_broom.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Shaker 2", 
					"audio" => "sounds/percs/shaker_command.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Snap", 
					"audio" => "sounds/percs/Snap_02.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Snap 2", 
					"audio" => "sounds/percs/Snap_03.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Christmas Tamborine", 
					"audio" => "sounds/percs/tam_christmassy.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Tamborine", 
					"audio" => "sounds/percs/Tambourine_01.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Clean Tom", 
					"audio" => "sounds/percs/tom_cleansweep.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Disco Tom", 
					"audio" => "sounds/percs/tom_discodisco.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Roland Tom", 
					"audio" => "sounds/percs/tom_iloveroland.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Tom Tom", 
					"audio" => "sounds/percs/tom_madisonave.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Triangle", 
					"audio" => "sounds/percs/Triangle_Open.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Wind Chime", 
					"audio" => "sounds/percs/Wind_Chime.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "perc", 
					"name" => "Wood Block", 
					"audio" => "sounds/percs/Wood_Block.wav", 
					"type" => "audio/wav"
					)
			);
		break;

		case 'synths':
			$info = array(
				
				array(
					"class" => "synth", 
					"name" => "Coin Drop", 
					"audio" => "sounds/synths/Coin Drop.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Clouds Guitar 1", 
					"audio" => "sounds/synths/home-clouds_guitar-fx-1_guitar_one_shot_.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Clouds Guitar 2", 
					"audio" => "sounds/synths/home-clouds_guitar-fx-2_guitar_one_shot_.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Clouds Guitar 3", 
					"audio" => "sounds/synths/home-clouds_guitar-fx-3_guitar_one_shot_.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Clouds Guitar 4", 
					"audio" => "sounds/synths/home-clouds_guitar-fx-4_guitar_one_shot_.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Clouds Guitar 5", 
					"audio" => "sounds/synths/home-clouds_guitar-fx-5_guitar_one_shot_.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Clouds Guitar 6", 
					"audio" => "sounds/synths/home-clouds_guitar-fx-6_guitar_one_shot_.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Clouds Guitar 7", 
					"audio" => "sounds/synths/home-clouds_guitar-fx-7_guitar_one_shot_.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Church Bell", 
					"audio" => "sounds/synths/sound (47).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Horn 1", 
					"audio" => "sounds/synths/horn 1.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Horn 2", 
					"audio" => "sounds/synths/horn 2.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Horn 3", 
					"audio" => "sounds/synths/horn 3.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Horn 4", 
					"audio" => "sounds/synths/horn 4.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Horn 5", 
					"audio" => "sounds/synths/horn 5.wav", 
					"type" => "audio/wav"
					),

				array(
					"class" => "synth", 
					"name" => "Dog Bark", 
					"audio" => "sounds/synths/Dog Bark.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Chant 1", 
					"audio" => "sounds/synths/trap-chant-10.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Chant 2", 
					"audio" => "sounds/synths/trap-chant-09.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Chant 3", 
					"audio" => "sounds/synths/trap-chant-07.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Yeaaaah", 
					"audio" => "sounds/synths/trap-chant-01.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Pulse 1", 
					"audio" => "sounds/synths/sound (38).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Pulse 2", 
					"audio" => "sounds/synths/sound (36).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Pulse 3", 
					"audio" => "sounds/synths/sound (50).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Pulse 4", 
					"audio" => "sounds/synths/sound (39).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Pulse Delay", 
					"audio" => "sounds/synths/sound (44).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Dark Hit", 
					"audio" => "sounds/synths/sound (37).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Dark Hit 2", 
					"audio" => "sounds/synths/sound (41).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Basic Piano", 
					"audio" => "sounds/synths/sound (35).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Random Keys", 
					"audio" => "sounds/synths/Random Piano Keys.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "String Rise", 
					"audio" => "sounds/synths/sound (34).wav", 
					"type" => "audio/wav"
					),

				array(
					"class" => "synth", 
					"name" => "String 1", 
					"audio" => "sounds/synths/String 1.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "String 2", 
					"audio" => "sounds/synths/String 2.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "String 3", 
					"audio" => "sounds/synths/String 3.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "String 4", 
					"audio" => "sounds/synths/String 4.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "String 5", 
					"audio" => "sounds/synths/String 5.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "String 6", 
					"audio" => "sounds/synths/String 6.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "String 7", 
					"audio" => "sounds/synths/String 7.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "String 8", 
					"audio" => "sounds/synths/String 8.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "String 9", 
					"audio" => "sounds/synths/String 9.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "String 10", 
					"audio" => "sounds/synths/String 10.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Mellow Flute", 
					"audio" => "sounds/synths/sound (46).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano G", 
					"audio" => "sounds/synths/piano-g.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano G#", 
					"audio" => "sounds/synths/piano-gsharp.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano F", 
					"audio" => "sounds/synths/piano-f.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano F#", 
					"audio" => "sounds/synths/piano-fsharp.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano Eb", 
					"audio" => "sounds/synths/piano-eb.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano E", 
					"audio" => "sounds/synths/piano-e.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano D", 
					"audio" => "sounds/synths/piano-d.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano C", 
					"audio" => "sounds/synths/piano-c.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano C#", 
					"audio" => "sounds/synths/piano-csharp.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano Bb", 
					"audio" => "sounds/synths/piano-bb.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano B", 
					"audio" => "sounds/synths/piano-b.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano A", 
					"audio" => "sounds/synths/piano-a.wav", 
					"type" => "audio/wav"
					),

				array(
					"class" => "synth", 
					"name" => "Goofy Horn", 
					"audio" => "sounds/synths/sound (8).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Torches", 
					"audio" => "sounds/synths/torches_synth-39_synths_one_shot_.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Clav Synth", 
					"audio" => "sounds/synths/percuss.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Clav Synth 2", 
					"audio" => "sounds/synths/Percus_1.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Bell", 
					"audio" => "sounds/synths/Sound01.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "What", 
					"audio" => "sounds/synths/what.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Jazzey", 
					"audio" => "sounds/synths/Jazzedo.wav", 
					"type" => "audio/wav"
					),

				array(
					"class" => "synth", 
					"name" => "Ringing", 
					"audio" => "sounds/synths/Undersco.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Jazz Hit", 
					"audio" => "sounds/synths/Jazz.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Low Sweep", 
					"audio" => "sounds/synths/R&b183.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Torches Synth", 
					"audio" => "sounds/synths/torches_synth-1_synths_one_shot_.wav", 
					"type" => "audio/wav"
					)
			);
		break;

		case 'snaresnologin':
			$info = array(
			
				array(
					"class" => "snare", 
					"name" => "808", 
					"audio" => "sounds/snares/808.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "Dark", 
					"audio" => "sounds/snares/Dark.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "Analog", 
					"audio" => "sounds/snares/snr_analogging.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "8Bit", 
					"audio" => "sounds/snares/snr_answer8bit.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "Bland", 
					"audio" => "sounds/snares/snr_bland.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "Real", 
					"audio" => "sounds/snares/snr_dwreal.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "snare", 
					"name" => "Housey", 
					"audio" => "sounds/snares/snr_housey.wav", 
					"type" => "audio/wav"
					)
			);
		break;

		case 'hatsnologin':
			$info = array(
			
				array(
					"class" => "hat", 
					"name" => "Ace", 
					"audio" => "sounds/hats/hat_ace.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Analog", 
					"audio" => "sounds/hats/hat_analog.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Big Deal", 
					"audio" => "sounds/hats/hat_bigdeal.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Classic House", 
					"audio" => "sounds/hats/hat_classichousehat.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Soft", 
					"audio" => "sounds/hats/Hat_Closed_04.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Closed", 
					"audio" => "sounds/hats/Hat_Closed_07.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "hat", 
					"name" => "Rough", 
					"audio" => "sounds/hats/Hat_Open_02.wav", 
					"type" => "audio/wav"
					)
			);
		break;

		case 'kicksnologin':
			$info = array(
			
				array(
					"class" => "kick", 
					"name" => "808 Sub", 
					"audio" => "sounds/kicks/_trap-808-41.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "808 Kick", 
					"audio" => "sounds/kicks/808(22).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "909", 
					"audio" => "sounds/kicks/bd_909dwsd.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "Deep House", 
					"audio" => "sounds/kicks/bd_deephouser.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "Flir", 
					"audio" => "sounds/kicks/bd_flir.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "kick", 
					"name" => "Hybrid", 
					"audio" => "sounds/kicks/bd_hybrid.wav", 
					"type" => "audio/wav"
					)
			);
		break;

		case 'synthsnologin':
			$info = array(

				array(
					"class" => "synth", 
					"name" => "Clouds Guitar 1", 
					"audio" => "sounds/synths/home-clouds_guitar-fx-1_guitar_one_shot_.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Church Bell", 
					"audio" => "sounds/synths/sound (47).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Horn 1", 
					"audio" => "sounds/synths/horn 1.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Dog Bark", 
					"audio" => "sounds/synths/Dog Bark.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Chant 1", 
					"audio" => "sounds/synths/trap-chant-10.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Pulse 1", 
					"audio" => "sounds/synths/sound (38).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Dark Hit", 
					"audio" => "sounds/synths/sound (37).wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "String Rise", 
					"audio" => "sounds/synths/sound (34).wav", 
					"type" => "audio/wav"
					),

				array(
					"class" => "synth", 
					"name" => "String 1", 
					"audio" => "sounds/synths/String 1.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano G", 
					"audio" => "sounds/synths/piano-g.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano G#", 
					"audio" => "sounds/synths/piano-gsharp.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano F", 
					"audio" => "sounds/synths/piano-f.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano F#", 
					"audio" => "sounds/synths/piano-fsharp.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano Eb", 
					"audio" => "sounds/synths/piano-eb.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano E", 
					"audio" => "sounds/synths/piano-e.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano D", 
					"audio" => "sounds/synths/piano-d.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano C", 
					"audio" => "sounds/synths/piano-c.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano C#", 
					"audio" => "sounds/synths/piano-csharp.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano Bb", 
					"audio" => "sounds/synths/piano-bb.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano B", 
					"audio" => "sounds/synths/piano-b.wav", 
					"type" => "audio/wav"
					),
				array(
					"class" => "synth", 
					"name" => "Piano A", 
					"audio" => "sounds/synths/piano-a.wav", 
					"type" => "audio/wav"
					)
			);
		break;
	}
	echo json_encode($info);
?>
