@extends('layouts.app')
<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(function() {
// 	//@TODO: FETCH FROM API DATABASE
// 	let butter = ["RASPBERRY CHIFFON PIE", "CARROT CAKE", "COCONUT CAKE", "LEMON MERINGUE", "NEW YORK CHEESECAKE", "OLIVE OIL LEMON CAKE",
// 		"TRIPLE CHOCOLATE CAKE", "DOGGIE TREATS"];

// 	let uncledesi = ["LUNCH BOX", "ALOO SAMOSA", "ONION PAKORA", "POPPADUMS", "BUTTER CHICKEN", "CHICKEN TIKKA MASALA",
// 		"LAMB ROGAN JOSH", "PANEER BUTTER MASALA", "PRAWN, VINDALOO", "VEGETABLE BALTI", "DAL TADKA FRY", "SAAG ALOO", "CHILLI PICKLE",
// 		"KACHUMBAR", "MANGO CHUTNEY", "MANGO PICKLE", "MINT CHUTNEY", "RAITA", "STEAMED RICE", "TAWA PARATHA", "JOHNIE WALKER BLACK LABEL",
// 		"KINGFISHER BEER - LAGER", "KINGFISHER BEER - STRONG"];

// 	let goparty = ["CHEERS WITH CHOM CHOM - MENU FOR 20 - $208 PER PERSON", "SOUL FOOD SOIREE - MENU FOR 20 - $148 PER PERSON", "MEZZE AND MERRIMENT - MENU FOR 10 - $318 PER PERSON", "BAHN MI BANQUET - MENU FOR 10 - $208 PER PERSON", "HERCULEAN FEAST - MENU FOR 10 - $288 PER PERSON"];

// 	let soulthai = ["FEAST FOR TWO", "CHICKEN SATAY (4 PCS)", "CRISPY CHICKEN WINGS (5 PCS)", "BANANA BLOSSOM SALAD", "GRILLED SQUID SALAD", "SPICY PAPAYA SALAD", "TUM YAM GOONG", "BEEF BRISKET PENANG CURRY", "GREEN CHICKEN CURRY", "LAMB MASSAMAN CURRY", "CHARGRILLED CHICKEN", "CHARGRILLED PORK JOWL", "CRAB FRIED RICE", "DRUNKARD'S NOODLES", "PAD SEE EW", "SOFT-SHELL CRAB PAD THAI", "JASMINE RICE", "STICKY RICE", "STIR-FRIED MORNING GLORY", "WOK-FRIED BROCOLLI", "WOK-FRIED MIXED VEGETABLES", "MANGO STICKY RICE", "CHANG BEER", "COKE", "FRESH COCONUT WATER", "FRESH LIME SODA", "SPARKLING WATER", "SPRITE", "STILL WATER", "THAI ICED TEA"];
	
// 	let holeefook = ["BAMBOO SALAD", "CHONGQING-STYLE CHICKEN WINGS", "PRAWN TOAST X OKONOMIYAKI", "WING BEAN AND EDAMAME SALAD", "ROAST WAGYU SHORT RIB", "VEGETARIAN MAPO TOFU", "TYPHOON SHELTER-STYLE FRIED CORN", "WOK-FRIED GREEN VEGETABLES", "COMBINATION SEAFOOD CHOW-MEIN", "EGG FRIED RICE", "MIX YOUR OWN STEAMED RICE", "PRAWN AND BACON FRIED RICE", "SHAANXI-STYLE SCISSOR-CUT NOODLES", "STEAMED WHITE RICE", "WOK-FRIED CHEONG FUN WITH XO", "DAD BOD", "FORTUNE COOKIES"];

// 	let burgercircus = ["AMERICAN CHEESEBURGER COMBO", "DELUXE COMBO", "DOUBLE COMBO", "FISH FILLET COMBO", "SPICY CHICKEN COMBO",
// 		"VEGGIE BURGER", "AMERICAN CHEESEBURGER", "CLASSIC BURGER", "DELUXE", "DOUBLE", "FISH FILLET", "SPICY CHICKEN", "VEGGIE BURGER",
// 		"1/2 DOZEN WINGS", "CIRCUS FRIES", "FRIES", "JALAPENO POPPERS", "CANDY SHAKE", "MILKSHAKE"];

// 	let supermacho = ["TACOS FOR TWO", "GRILLED STEAK & CHEESE BURRITO", "HABANERO-ROASTED CHICKEN BURRITO", "AL PASTOR", "CRISPY FISH",
// 		"HABANERO-MARINATED STEAK", "ROAST CHICKEN", "SHRIMP A LA PLANCHA", "TORTILLA CHIPS & GUACOMOLE", "BLACK BEANS", "TORTILLA CHIPS",
// 		"AVOCADO HABANERO", "PICO DE GALLO", "SALSA VERDE", "CORONITA", "JOSE CUERVO TRADICIONAL REPOSADO", "MINI CASAMIGOS BLANCO", "MODELO NEGRA",
// 		"PACIFICO CLARA", "3 CENTS PINK GRAPEFRUIT SODA", "COKE ZERO", "MEXICAN COKE", "SPARKLING WATER", "SPRITE", "STILL WATER"];

// 	let lavache = ["STEAK SANDWICH + FRIES", "COKE", "COKE LIGHT", "SPARKLING WATER", "STILL WATER", "SPRITE"];

// 	let stazione = ["APERITIVO FOR TWO", "FORMAGGI - ASSORTED FOR TWO", "SALUMI - ASSORTED FOR TWO", "AYALA 'BRUT MAJEUR' CHAMPPAGNE NV", "CINZANO, VENETO NV",
// 	"ODDERO 'CASCINA FIORI' MOSCATO D'ASTI, PIEDMONT 2016", "CASALI MANIAGO, SAUVIGNON BLANC FRIULI COLLI ORIENTALI, FRIULI 2018", "FANTIEL 'BORGO TESIS' CHARDONAY, FRIULI 2017", "SANTA SOFIA 'MONTEFOSCARINO' SOAVE CLASSICO, VENETO 2017", "ZONIN '20 VENTITERRE' PINOT GRIGIO, VENEZIA 2018", "ZENI 'VIGNE ALTE' BARDOLINO CHIARETTO CLASSICO, VENETO 2018", "ARIANNA OCCHIPINTI 'SICCAGNO' NERO D'AVOLA, SICILY 2015", "ARIANNA OCCHIPINTI 'SP68' NERO D'AVOLA & FRAPPATTO, SICILY 2016", "BUONDONNO, CHIANTI CLASSICO (FIASCO BOTTLE), TUSCANY 2015", "BUONDONNO, CHIANTI CLASSICO RISERVA, TUSCANY 2016",
// 	"CANTINE ASTRONI, GRAGNANO PENISOLA SORRENTINA, CAMPANIA 2014", "CANTINE DI TUFO 'SANNIO' AGLIANICO, PUGLIA 2017", "CANTINE PELLEGRINO 'TARENI' FRAPPATO, SICILY 2017", "CECCHI CHIANTI, TUSCANY 2017", "ENZO BOGLIETTI 'VIGNA DEI ROMANI' BARBERA D'ALBA, PIEDMONT 2009", "ENZO BOGLIETTI, BAROLO BOILO, PIEDMONT 2013", "ENZO BOGLIETTI, BAROLO BRUNATE, PIEDMONT 2012", "ENZO BOEGLIETTI, BAROLO FOSSATI, PIEDMONT 2008", "ENZO BOGLIETTI, DOLCETTO D'ALBA, PIEDMONT 2017","FARNESE 'CASALE VECCHIO' MONTEPULCIANO D'ABRUZZO, ABRUZZO 2016", "FRANCESCO RINALDI, BAROLO BRUNATE, PIEDMONT 2012", "GULFI 'ROSSOJBLEO' NERO D'AVOLA, SICILY 2017", "NERO D'AVOLA 'CORALE' SETTESOLI, SICILY 2018", "ORLANDO ABRIGO 'MERVISANO' BARBERA D'ALBA, PIEDMONT 2013", "ORLANDO ABRIGO, BARBARESCO RONGALIO, PIEDMONT 2011", "POGGIO VERRANO 'DROMOS L'ALTRO' SANGIOVESE, TUSCANY 2007", "PRIMITIVO SALENTO 'SASSEO' MASSERIA ALTEMURA, PUGLIA 2017", "SALVATERRA, AMARONE DELLA VALPOLICELLA, VENETO 2011", "SALVATERRA, VALPOLICELLA CLASSICO, VENETO 2015", "SALVATERRA, VALPOLICELLA RIPASSO CLASSICO SUPERIORE, VENETO 2014", "SPERI, VALPOLICELLA RIPASSO CLASSICO SUPERIORE, VENETO 2016", "TENUTA NICOSIA 'FONDO FILARA' ETNA ROSSO, SICILY 2015", "TENUTA PATRUNO PERNIOLA 'LENOS', PRIMITIVO, PUGLIA 2016", "TENUTE NICOSIA 'FONDO FILARA' NERO D'AVOLA 2017", "VERBENA BRUNELLO DI MONTALCINO RISERVA, TUSCANY 2011", "VERBENA, BRUNELLO DI MONTALCINO MAGNUM, TUSCANY 2014", "VERBENA, BRUNELLO DI MONTALCINO, TUSCANY 2014", "VERBENA, ROSSO DI MONTALCINO, TUSCANY 2015", "VIGNETI ZANATTA 'ALINOS' CANNONAU DI SARDEGNA 2017", "VIERNA, BAROLO CANNUBI BOSCHIS, PIEDMONT 2011", "ZENI 1870 'VIGNE ALTE' AMARONE DELLA VALPOLICELLA CLASSICO, VENETO 2011", "BREAKFAST PANINI", "MERCATO CENTRALE", "SAN NICCOLO", "SANTA MARIA", "SEASONAL SOUP", "APERITIVO ON THE GO FOR 10", "BRESAOLA", "COPPA", "FORMAGGI - ASSORTED FOR THREE", "FORMAGGI E SALUMI MISTI", "PROSCIUTTO DI PARMA", "SALUMI - ASSORTED FOR THREE", "SOPRESSATA", "AMERICANO", "CAFFE LATTE", "CAFFE MOCHA", "CAPPUCCINO", "CORTADO", "DOUBLE ESPRESSO", "ESPRESSO", "FLAT WHITE", "ICED AMERICANO", "ICED LATTE", "LONGO BLACK", "MARINATED OLIVES", "TOASTED BREAD"];

// 	// ID: 7 & 16
// 	let motorino = ["DATE NIGHT SPECIAL", "DATE NIGHT SPECIAL - GRAGNANO", "MAKE YOUR OWN PIZZA", "BRESAOLA PIZZA", "BRUSSELS SPROUT PIZZA", "COLATURA DI ALICI PIZZA", "CREMINI MUSHROOM PIZZA", "MARGHERITA PIZZA", "MARINARA PIZZA", "PORCHETTA PIZZA", "PROSCIUTTO DI PARMA PIZZA", "QUATTRO FORMAGGI PIZZA", "SOPPRESSATA PICCANTE PIZZA", "ARUGULA SALAD", "CHIKEN WINGS", "CHOPPED SALAD", "MARINATED OLIVES", "MIXED GREENS SALAD", "PROSCUITTO DI PARMA", "ROASTED PEPPERS", "ROASTED SWEET CORN", "CLASSIC NEW YORK CHEESECAKE", "NUTELLA CALZONE", "TIRAMISU", "MONTEPULCIANO D'ABRUZZO FARNESE LARINUM, 2013 . DOC ABRUZZO", "TREBBIANO D'ABRUZZO 'FANTINI' FARNESE 2017", "UNDERWOOD - RED WINE", "UNDERWOOD - THE BUBBLES", "UNDERWOOD - WHITE WINE", "ARANCIATA", "COKE", "COKE ZERO", "CREAM SODA", "EAST IMPERIAL GINGER ALE", "EAST IMPERIAL GINGER BEER", "ICHNUSA NON FILTRATA", "LIMONATA", "MORETTI", "PILSNER URQUELL", "ROOT BEER", "SPARKLING WATER", "SPRITE", "STILL WATER", "10 PIZZE", "12 PIZZE | 6 ANTIPASTI", "6 PIZZE | 4 ANTIPASTI", "8 PIZZE", "8 PIZZE | 4 ANTIPASTI"];

// 	let libanaise = ["HALF SALAD AND HALF RICE + SOFT DRINK", "CHICKEN MESHOUUE (4 PCS) + SOFT DRINK", "HALF RICE AND HALF SALAD", "BEEF SHAWARMA", "CAULIFLOWER", "CHIKEN MESHOUE", "HALLOUOMI (4 PCS)", "MAISON'S FALAFEL (4 PCS)", "ZFC (3 PCS)", "BEEF SHAWARMA WRAP", "CAULIFLOWER WRAP", "CHICKEN MESHOUE WRAP", "HALLOUMI WRAP (3 PCS)", "MAISON'S FALAFEL WRAP (3 PCS)", "BABA GHANOUSH", "CHEESE MAN'OUSHE", "CUCUMBER LABNE", "HEARTH-BAKED PITA BREAD (1 PC)", "HOUSE-MADE PICKLES", "HUMMUS BIL TAHINI", "MAISON'S FALAFEL", "BAKLAVA", "961 PALE ALE", "961 WITBIER", "ARANCIATA", "COKE", "COKE ZERO", "FRESH LEMONADE", "LIMONATA", "SPARKLING WATER", "SPRITE", "STILL WATER", "10 SALAD BOWLS | 10 RICE BOWLS", "10 WRAPS | PITA CHIPS AND DIP", "20 WRAPS | PITA CHIPS AND DIP", "CATERING FOR 10 | MAISON TRAITEUR", "JUNK CATERING FOR 10 | BATEAU ET MEZZE"];

// 	let chomchom = ["CHOM CHOM & CHILL", "BRAISED PORK RIBS & EGG", "GRILLED DIVER SCALLOP & POMELO", "GRILLED TIGER PRAWNS", "LEMONGRASS & KAFFIR CHICKEN SKEWERS (2 PCS)", "PRAWN CRACKERS", "ROASTED BONE MARROW", "SALT & PEPPER SQUID", "SEARED COD ON SESAME RICE CRACKER", "VFC (5 PCS)", "CRISPY SOLE FILLET PAPER ROLL (6 PCS)", "CRISPY SPRING ROLL (6 PCS)", "PHO ROLL (6 PCS)", "SHRIMP RICE PAPER ROLL (6 PCS)", "SUMMER PAPER ROLL (6 PCS)", "KAFFIR CHICKEN CABBAGE SALAD", "CARAMEL BLACK COD", "CHA CA HANOI", "SHAKING BEEF", "SHORT RIB LETTUCE WRAPS (3 PCS)", "CHARRED GAI LAN IN CURRY", "STEAMED JASMINE RICE", "VERMICELLI NOODLES", "WOK-FRIED MORNING GLORY", "333", "SAIGON", "COKE", "COKE LIGHT", "SPRITE"];

// 	let hotalcolambo = ["HOTAL AT HOME", "BANANA CHIPS", "CHICKEN KOTHU", "SHRIMP KOTHU", "VEGETABLE KOTHU", "STUFFED CHEESE PARATHA", "STUFFED CHICKEN PARATHA", "CHICKEN KARI", "FISH KARI", "PRAWN KARI", "GOTUKOLA SALAD", "LUNU MIRIS", "PINEAPPLE AND MANGO PICKLE", "POL SAMBOL", "SEENI SAMBOL", "BRINJAL MOJU", "CABBAGE MALLUM", "IDLI", "KIRI HODI", "PARATHA", "POL ROTI", "SPINACH MALLUM", "STEAMED RICE", "YOGHURT", "KINGIFHSER LAGER", "LION LAGER", "LION STOUT", "LION STRONG"];

// 	let lepetitsaigon = ["CRISPY SOFT-SHELL CRAB BANH MI", "BANH MI + DRINK + LE PETIT SAIGON COLESLAW", "BANH MI + DRINK + POTATO GEMS", "BANH MI CHAY", "BANH MI GA", "BANH MI THIT", "LE PETIT SAIGON COLESLAW", "POTATO GEMS WITH SPICY MAYO", "SAIGON WINGS", "SAIGON BEER", "COKE", "COKE ZERO", "ICED CALAMANSI SODA", "ICED PASSION FRUIT TEA", "ICED VIETNAMESE COFFEE", "SODA WATER", "SPRITE", "10 BANH MI", "15 BANH MI", "20 BANH MI"];

// 	let artemisapollo = ["TAVERNA FOR TWO", "CHICKEN SOUVLAKI + DRINK", "FALAFEL SOUVLAKI + DRINK", "HALF CHICKEN AND HALF PORK SOUVLAKI + DRINK", "NAKED FALAFEL + DRINK", "NAKED SOUVLAKI + DRINK", "PORK SOUVLAKI + DRINK", "CHICKEN SOUVLAKI", "FALAFEL SOUVLAKI", "HALF CHICKEN AND HALF PORK SOUVLAKI", "NAKED FALAFEL", "NAKED SOUVLAKI", "PORK SOUVLAKI", "TAVERNA CHICKEN SOUP", "CRUDITES", "CYPRIOT SALAD", "GREEK VILLAGE SALAD", "HERBED FRIES", "HUMMUS DIP", "MARINATED OLVIES", "ROASTED EGGPLANT DIP", "TARAMASALATA DIP", "TZATZIKI THEODOROS DIP", "WARM PITA", "GREEK YOGHURT CHEESECAKE", "961 LAGER", "COKE", "COKE LIGHT", "COKE ZERO", "SPARKLING WATER", "SPRITE", "STILL WATER", "5 CHICKEN SOUVLAKI | 5 PORK SOUVLAKI"];

// 	// DEFAULT autocomplete input BUTTER
// 	$("#tags").autocomplete({
// 		source: butter
// 	});

// 	$("#selectVenue").change(function() {
// 		let getVenue = $(this).children("option:selected").val();
// 		$("#tags").val("");
		
// 		if (getVenue == 1) {
// 			$("#tags").autocomplete({
// 				source: butter
// 			});
// 		}

// 		if (getVenue == 2) {
// 			$("#tags").autocomplete({
// 				source: uncledesi
// 			});
// 		}

// 		if (getVenue == 3) {
// 			$("#tags").autocomplete({
// 				source: goparty
// 			});
// 		}

// 		if (getVenue == 4) {
// 			$("#tags").autocomplete({
// 				source: soulthai
// 			});
// 		}

// 		if (getVenue == 5) {
// 			$("#tags").autocomplete({
// 				source: holeefook
// 			});
// 		}

// 		if (getVenue == 6) {
// 			$("#tags").autocomplete({
// 				source: burgercircus
// 			});
// 		}

// 		if (getVenue == 7 || getVenue == 16) {
// 			$("#tags").autocomplete({
// 				source: motorino
// 			});
// 		}

// 		if (getVenue == 8) {
// 			$("#tags").autocomplete({
// 				source: libanaise
// 			});
// 		}

// 		if (getVenue == 9) {
// 			$("#tags").autocomplete({
// 				source: chomchom
// 			});
// 		}

// 		if (getVenue == 10) {
// 			$("#tags").autocomplete({
// 				source: supermacho
// 			});
// 		}

// 		if (getVenue == 11) {
// 			$("#tags").autocomplete({
// 				source: hotalcolambo
// 			});
// 		}

// 		if (getVenue == 12) {
// 			$("#tags").autocomplete({
// 				source: lavache
// 			});
// 		}

// 		if (getVenue == 13) {
// 			$("#tags").autocomplete({
// 				source: stazione
// 			});
// 		}

// 		if (getVenue == 14) {
// 			$("#tags").autocomplete({
// 				source: lepetitsaigon
// 			})
// 		}

// 		if (getVenue == 15) {
// 			$("#tags").autocomplete({
// 				source: artemisapollo
// 			});
// 		}
// 	});

	function createOrderInput() {
		$("#addFood").append("<div class='row orderItem'> <div class='col-md-10 margin-bottom-medium'><input class='form-control' name='item[]' type='text' value='" + $("#tags").val() + "'></div><div class='col-md-2 margin-bottom-medium'><div class='removeItem form-control btn btn-danger'>Remove</div></div></div>");
		$("#tags").val("");
		$("#tags").focusin();
	}

	$("#addFood").on('click', '.removeItem', function() {
		$(this).parent().parent().remove();
	});

	$("#tags").on('keypress', function(e) {
		if (e.which == 13) {
			createOrderInput();
			e.preventDefault();
		}
	});

	$("#addNewItem").on('click', function(e) {
		createOrderInput();
		e.preventDefault();
	});
});
</script>

@section('content')
<div class="container">
	<form method="post" action="/order/create">
		@csrf

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="venue">Venue</label>
				<select id="selectVenue" class="form-control" name="venue">
					<option value="1">Butter</option>
					<option value="2">Uncle Desi and Sons</option>
					<option value="3">Go Party</option>
					<option disabled></option>
					<option value="4">Soul Food Thai</option>
					<option value="5">Ho Lee Fook</option>
					<option value="6">Burger Circus</option>
					<option value="7">Motorino (Soho)</option>
					<option value="8">Maison Libanaise</option>
					<option value="9">Chôm Chôm</option>
					<option value="10">Taqueria Super Macho</option>
					<option value="11">Hotal Colambo</option>
					<option value="12">La Vache</option>
					<option value="13">Stazione Novella</option>
					<option disabled></option>
					<option value="14">Le Petit Saigon</option>
					<option value="15">Artemis Apolo</option>
					<option value="16">Motorino (Wan Chai)</option>
				</select>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label for="order_number">Order #</label>
				<input class="form-control" type="number" name="order_number">
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="ordered_at">Ordered at</label>
				<input class="form-control" type="time" name="order_at">
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="form-group">
				<label for="ready_at">Ready at</label>
				<input type="time" class="form-control" name="ready_at">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="payment">Payment</label> <br>
				
				<div class="row">
					<div style="margin-left:20px;" class="col-md-2">
						<input class="form-check-input" type="radio" name="payment_method" value="cash" checked>
						<label class="form-check-label" for="cash">Cash</label>
					</div>

					<div class="col-md-2">
						<input type="radio" class="form-check-input" name="payment_method" value="stripe">
						<label for="stripe" ckass="form-check-label">Stripe</label> 
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label for="status">Status</label> <br>

				<div class="row">
					<div style="margin-left:20px;" class="col-md-2">
						<input class="form-check-input" type="radio" name="status" value="pending" checked>
						<label class="form-check-label" for="pending">Pending</label>
					</div>

					<div class="col-md-2">
						<input type="radio" class="form-check-input" name="status" value="accepted">
						<label class="form-check-label" for="accepted">Accepted</label>
					</div>

					<div class="col-md-2">
						<input type="radio" class="form-check-input" name="status" value="rejected">
						<label for="rejected" class="form-check-label">Rejected</label>
					</div>

					<div class="col-md-2">
						<input type="radio" class="form-check-input" name="status" value="ready">
						<label class="form-check-label" for="ready">Ready</label>
					</div>

					<div class="col-md-2">
						<input type="radio" class="form-check-input" name="status" value="delivered">
						<label class="form-check-label" for="delivered">Delivered</label>	
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

		<div class="col-md-12">
			<label for="add_items">Add items</label>
		</div>
		<div class="col-md-10 margin-bottom-medium">
			<div class="ui-widget">
			  <input type="text" name="item[]" class="form-control" id="tags">
			</div>
		</div>

		<div class="col-md-2 margin-bottom-medium">
			<div id="addNewItem" class="btn btn-success form-control">Add</div>
		</div>
	</div>
	
	<div style="width:100%;" id="addFood">
	
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="number">Tips</label>
				<input step="0.01" type="number" class="form-control" name="tips">
			</div>
		</div>

		<div class="col-md-6 offset-md-3">
			<input class="btn btn-primary form-control" type="submit" value="Create Order" name="submit">
		</div>
	</div>
	</form>
</div>
@endsection