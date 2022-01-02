<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="utf-8">
    <title>Doggo Ipsum Generator</title>
		<link href="mystyle.css" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  </head>
  <body>
	
	<img src="barkdog.gif" alt="barkdog.gif" width="300" height="225" style="border: 1px solid black">

	<h2>The Doggo Ipsum Generator</h2>

    <?php # lorem_ipsum.php
		//first validate form data
		$total_para = $_REQUEST['total_para'] ?? NULL;

		//creating the ipsum
		//number of paragraphs requested
		$total_para = $_POST['total_para'];

		//empty variable for the ipsum results
		$ipsum_result = "";

		//loop for $ipsum_result
		for ($para_number = 0; $para_number < $total_para; $para_number++) {

			//creating the paragraph
			//random total sentences
			$total_sentences = rand(3, 8);//for testing

			//empty variable for ipsum paragraph
			$ipsum_paragraph = "";

			//loop for ipsum paragraph
			for ($sentence_number = 0; $sentence_number < $total_sentences; $sentence_number++) {

				//from Prof Dena's code sample
				//setting total_words for testing purposes - need to create form input
				//random total words
				$total_words = rand(5, 15);

				//create array with at least 100 words - mine only has 40. Be sure to include other common sentence words
				$doggo_list = ["the", "be", "of", "and", "a", "in", "to", "have", "it", "to", "for", "I", "that", "your", "he", "on", "with", "do", "at", "by", "not", "this", "but", "from", "they", "Affenpinscher", "Akita", "Barbet", "Basenji", "Beagle", "Chihuahua", "Chinook", "Collie", "Dachshund", "Dalmation", "Drever", "Eurasier", "French Bulldog", "Great Dane", "Yorkshire Terrier", "Weimaraner", "Whippet", "Vizsla", "Tosa", "Tornjak", "Tibetan Terrier", "Saluki", "Samoyed", "Saint Bernard", "Scottish Terrier", "Rottweiler", "Rhodesian Ridgeback", "Papillon", "Pekingese", "Pointer", "Pomeranian", "Otterhound", "Old English Sheepdog", "Newfoundland", "Neapolitan Mastiff", "Maltese", "Mastiff", "Miniature Schnauzer", "Labrador Retriever", "Leonberger", "Lhasa Apso", "Lowchen", "Keeshond", "Kai Ken", "Kishu Ken", "Komondor", "Jagdterrier", "Japanese Chin", "Jindo", "Japanese Spitz", "Ibizan Hound", "Irish Setter", "Italian Greyhound", "Irish Wolfhound", "Harrier", "Havanese", "Hokkaido", "German Shepherd Dog", "Golden Retriever", "Gordon Setter", "Field Spaniel", "Finnish Spitz", "English Setter", "English Cocker Spaniel", "Doberman Pinscher", "Cane Corso", "Carolina Dog", "Basset Hound", "Afghan Hound", "Alaskan Malamute", "American Bulldog", "Wire Fox Terrier", "French Spaniel", "Xoloitzcuintli", "doggo", "pupper", "pupperino", "woofer", "boofer", "floof", "floofer", "fluffer", "boop the snoot", "doge", "hooman", "fren", "boi", "chimkin", "smol", "thicc", "chonky", "floofy", "goob", "bork", "awoo", "blep", "mlem", "sploot", "heck", "heckin", "you are doin' me a scare", "how", "much", "many", "such", "so", "very", "henlo", "Alaskan Klee Kai", "American English Coonhound", "American Eskimo Dog", "American Foxhound", "American Hairless Terrier", "American Leopard Hound", "Yakutian Laika", "Welsh Springer Spaniel", "West Highland White Terrier", "Wetterhoun", "Wirehaired Pointing Griffon", "Working Kelpie", "Volpino Italiano", "Taiwan Dog", "Teddy Roosevelt Terrier", "Thai Ridgeback", "Toy Fox Terrier", "Transylvanian Hound", "Treeing Tennessee Brindle", "Treeing Walker Coonhound", "Schapendoes", "Schipperke", "Scottish Deerhound", "Sealyham Terrier", "Segugio Italiano", "Shetland Sheepdog", "Shiba Inu", "Shih Tzu", "Rafeiro do Alentejo", "Rat Terrier", "Redbone Coonhound", "Romanian Mioritic Shepherd Dog", "Russell Terrier", "Russian Toy", "Russian Tsvetnaya Bolonka", "Parson Russell Terrier", "Pembroke Welsh Corgi", "Perro de Presa Canario", "Peruvian Inca Orchid", "Petit Basset Griffon Vendeen", "Pharaoh Hound", "Plott Hound", "Polish Lowland Sheepdog", "Nederlandse Kooikerhondje", "Norfolk Terrier", "Norrbottenspets", "Norwegian Buhund", "Norwegian Elkhound", "Norwegian Lundehund", "Norwich Terrier", "Nova Scotia Duck Tolling Retriever", "Manchester Terrier", "Miniature American Shepherd", "Miniature Bull Terrier", "Miniature Pinscher", "Mountain Cur", "Mudi", "Lagotto Romagnolo", "Lancashire Heeler", "Lapponian Herder"];
		
				//total number of words in my array for random index picker
				$tot_word_list = count($doggo_list);
		
				//initialize my sentence to nothing before i start creating it
				$this_sentence = "";
				$x = 0;

				//now loop through the $total_words amount of times to create random words from my array
				while($x < $total_words) {

					//randomly select an array index to PICK a word from our word list
					//note that I am subtracting one since the word count is 1 more than the index since we start at 0
					$this_index = (rand(0,($tot_word_list-1)));
			
					//add the new string onto the existing string
					$this_sentence = $this_sentence . " " . $doggo_list[$this_index];

					//#increment our loop counter
					$x++;
					}
				
				//using two string functions here
				//trim which will remove any white space from the beginning or end of the string
				//and uppercase first which will capitalize the first letter with a period at the end
				//echo "<fieldset><p><strong>Formatted sentence :</strong>" . ucfirst(trim($this_sentence)) . ".</p>\n</fieldset>";

				$ipsum_paragraph = $ipsum_paragraph . ucfirst(trim($this_sentence)) . ". ";
			
			}//end of loop for ipsum paragraph

		$ipsum_result = $ipsum_result . $ipsum_paragraph . "<br><br>";

		}//end of loop for $ipsum_result

		echo "<fieldset><p class=\"ipsum_result\">" . $ipsum_result . "</p></fieldset>\n";

		?>

		<div class="back_button">
			<button onclick="goBack()" class="button">Go Back</button>
		</div>
		
		<script>
			function goBack() {
				window.history.back();
				}
		</script>

	</body>
</html>