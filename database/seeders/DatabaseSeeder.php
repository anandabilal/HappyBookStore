<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Book;
use App\Models\Detail;
use Faker\Provider\Lorem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        // Insert 6 rows on Category
        Category::insert([
            ['category' => 'Fantasy'], 
            ['category' => 'Romance'], 
            ['category' => 'Mystery'], 
            ['category' => 'Science Fiction'], 
            ['category' => 'History'],
            // No book will be categorized as Education
            ['category' => 'Education']
        ]);

        // Insert 15 rows on Book
        Book::insert([
            ['category_id' => 1, 'title' => 'Alice’s Adventures in Wonderland'],
            ['category_id' => 2, 'title' => 'Pride and Prejudice'],
            ['category_id' => 3, 'title' => 'And Then There Were None'],
            ['category_id' => 4, 'title' => 'The Blazing World'],
            ['category_id' => 5, 'title' => 'Grant'],
            ['category_id' => 1, 'title' => 'The Hobbit, Part One'],
            ['category_id' => 2, 'title' => 'Jane Eyre'],
            ['category_id' => 3, 'title' => 'The Big Sleep'],
            ['category_id' => 4, 'title' => 'Frankenstein'],
            ['category_id' => 5, 'title' => 'The History of the Ancient World: From the Earliest Accounts to the Fall of Rome'], 
            ['category_id' => 5, 'title' => 'The Dawn of Everything: A New History of Humanity'], 
            ['category_id' => 1, 'title' => 'The ​Crown of Gilded Bones'], 
            ['category_id' => 2, 'title' => 'Life’s Too Short'], 
            ['category_id' => 3, 'title' => 'A Slow Fire Burning'], 
            ['category_id' => 5, 'title' => 'Vanderbilt: The Rise and Fall of an American Dynasty']
        ]);

        // Insert 15 rows on Detail
        Detail::insert([
            ['book_id' => 1, 
            'author' => 'Lewis Carroll', 
            'publisher' => 'Dover Publications', 
            'year' => 1993, 
            'description' => 'One of the English language’s most popular and frequently quoted books, Alice’s Adventures in Wonderland was the creation of Charles Lutwidge Dodgson (1832–1898), a distinguished scholar and mathematician who wrote under the pseudonym of Lewis Carroll. Intended for young readers but enjoyed equally by adults, the fantastic tale transformed children’s literature, liberating it from didactic constraints. The story is deeply but gently satiric, enlivened with an imaginative plot and brilliant use of nonsense. As Alice explores a bizarre underground world, she encounters a cast of strange characters and fanciful beasts: the White Rabbit, March Hare, and Mad Hatter; the sleepy Dormouse and grinning Cheshire Cat; the Mock Turtle, the dreadful Queen of Hearts, and a host of other extraordinary personalities. This edition features Sir John Tenniel’s complete original illustrations, bringing to life a beloved classic that has delighted readers and listeners since its first publication in 1865.'], 

            ['book_id' => 2, 
            'author' => 'Jane Austen', 
            'publisher' => 'AmazonClassics', 
            'year' => 1813, 
            'description' => 'Love is in the air when five sisters discover that a wealthy and eligible bachelor is suddenly within reach. But it is his friend, the haughty Mr. Darcy, who becomes smitten. Unfortunately for him, the object of his affection is not so easily swayed. One of the most popular characters in English literature, Elizabeth Bennet is intelligent, witty, well-spoken and ahead of her time. If the terrible rumors about Mr. Darcy are true, he doesn’t stand a chance. Yet not all gossip is to be believed when marriage, money, and reputations are on the line. Will Elizabeth and Mr. Darcy circumvent her haste, his ego, and society’s expectations to find love? Written more than two centuries ago, Jane Austen’s enduring story of manners, family, and love continues to delight new generations of readers.'], 

            ['book_id' => 3, 
            'author' => 'Agatha Christie', 
            'publisher' => 'St. Martin’s Press', 
            'year' => 2004, 
            'description' => 'First, there were ten—a curious assortment of strangers summoned as weekend guests to a little private island off the coast of Devon. Their host, an eccentric millionaire unknown to all of them, is nowhere to be found. All that the guests have in common is a wicked past they’re unwilling to reveal—and a secret that will seal their fate. For each has been marked for murder. A famous nursery rhyme is framed and hung in every room of the mansion: "Ten little boys went out to dine; One choked his little self and then there were nine. Nine little boys sat up very late; One overslept himself and then there were eight. Eight little boys traveling in Devon; One said he’d stay there then there were seven. Seven little boys chopping up sticks; One chopped himself in half and then there were six. Six little boys playing with a hive; A bumblebee stung one and then there were five. Five little boys going in for law; One got in Chancery and then there were four. Four little boys going out to sea; A red herring swallowed one and then there were three. Three little boys walking in the zoo; A big bear hugged one and then there were two. Two little boys sitting in the sun; One got frizzled up and then there was one. One little boy left all alone; He went out and hanged himself and then there were none." When they realize that murders are occurring as described in the rhyme, terror mounts. One by one they fall prey. Before the weekend is out, there will be none. Who has choreographed this dastardly scheme? And who will be left to tell the tale? Only the dead are above suspicion.'], 

            ['book_id' => 4, 
            'author' => 'Siri Hustvedt', 
            'publisher' => 'Simon Schuster', 
            'year' => 2014, 
            'description' => 'A brilliant, provocative novel about an artist who, after years of being ignored by the art world, conducts an experiment: she conceals her female identity behind three male fronts. Presented as a collection of texts, edited and introduced by a scholar years after the artist’s death, the book unfolds through extracts from Burden’s notebooks and conflicting accounts from others about her life and work. Even after she steps forward to reveal herself as the force behind three solo shows, there are those who doubt she is responsible for the last exhibition, initially credited to the acclaimed artist Rune. No one doubts the two artists were involved with each other. According to Burden’s journals, she and Rune found themselves locked in a charged and dangerous psychological game that ended with the man’s bizarre death.'], 

            ['book_id' => 5, 
            'author' => 'Ron Chernow', 
            'publisher' => 'Penguin Press', 
            'year' => 2017, 
            'description' => 'Ulysses S. Grant’s life has typically been misunderstood. All too often he is caricatured as a chronic loser and inept businessman, fond of drinking to excess; or as the triumphant but brutal Union general of the Civil War; or as a credulous and hapless president whose tenure came to symbolize the worst excesses of the Gilded Age. These stereotypes don’t come close to capturing adequately his spirit and the sheer magnitude of his monumental accomplishments. A biographer at the height of his powers, Chernow has produced a portrait of Grant that is a masterpiece, the first to provide a complete understanding of the general and president whose fortunes rose and fell with dizzying speed and frequency. Before the Civil War, Grant was flailing. His business ventures had been dismal, and despite distinguished service in the Mexican War, he ended up resigning from the army in disgrace amid recurring accusations of drunkenness. But in the Civil War, Grant began to realize his remarkable potential, soaring through the ranks of the Union army, prevailing at the Battle of Shiloh and in the Vicksburg campaign and ultimately defeating the legendary Confederate general Robert E. Lee after a series of unbelievably bloody battles in Virginia. Along the way Grant endeared himself to President Lincoln and became his most trusted general and the strategic genius of the war effort. His military fame translated into a two-term presidency, but one plagued by corruption scandals involving his closest staff. All the while Grant himself remained more or less above reproach. But, more importantly, he never failed to seek freedom and justice for black Americans, working to crush the Ku Klux Klan and earning the admiration of Frederick Douglass, who called him "the vigilant, firm, impartial, and wise protector of my race." After his presidency, he was again brought low by a trusted colleague, this time a dashing young swindler on Wall Street, but he resuscitated his image by working with Mark Twain to publish his memoirs, which are recognized as a masterpiece of the genre. With his famous lucidity, breadth, and meticulousness, Chernow finds the threads that bind these disparate stories together, shedding new light on the man whom Walt Whitman described as "nothing heroic... and yet the greatest hero." His probing portrait of Grant’s lifelong struggle with alcoholism transforms our understanding of the man at the deepest level. This is America’s greatest biographer, bringing movingly to life one of America’s finest but most underappreciated presidents. The definitive biography, Grant is a grand synthesis of painstaking research and literary brilliance that makes sense of all sides of Grant’s life, explaining how this simple Midwesterner could at once be so ordinary and so extraordinary.'], 

            ['book_id' => 6, 
            'author' => 'J.R.R. Tolkien', 
            'publisher' => 'HarperCollins Children’s Books', 
            'year' => 2012, 
            'description' => 'Smaug certainly looked fast asleep, when Bilbo peeped once more from the entrance. He was just about to step out onto the floor when he caught a sudden thin ray of red from under the drooping lid of Smaug’s left eye. He was only pretending to be sleep! He was watching the tunnel entrance! Whisked from his comfortable hobbit-hole by Gandalf the wizard and a band of dwarves, Bilbo Baggins finds himself caught up in a plot to raid the treasure hoard of Smaug the Magnificent, a large and very dangerous dragon.'], 

            ['book_id' => 7, 
            'author' => 'Charlotte Brontë', 
            'publisher' => 'Penguin Classics', 
            'year' => 2006, 
            'description' => 'A novel of intense power and intrigue, Jane Eyre has dazzled generations of readers with its depiction of a woman’s quest for freedom. Having grown up an orphan in the home of her cruel aunt and at a harsh charity school, Jane Eyre becomes an independent and spirited survivor-qualities that serve her well as governess at Thornfield Hall. But when she finds love with her sardonic employer, Rochester, the discovery of his terrible secret forces her to make a choice. Should she stay with him whatever the consequences or follow her convictions, even if it means leaving her beloved? This updated Penguin Classics edition features a new introduction by Brontë scholar and award-winning novelist Stevie Davies, as well as comprehensive notes, a chronology, further reading, and an appendix. For more than seventy years, Penguin has been the leading publisher of classic literature in the English-speaking world. With more than 1,700 titles, Penguin Classics represents a global bookshelf of the best works throughout history and across genres and disciplines. Readers trust the series to provide authoritative texts enhanced by introductions and notes by distinguished scholars and contemporary authors, as well as up-to-date translations by award-winning translators.'], 

            ['book_id' => 8, 
            'author' => 'Raymond Chandler', 
            'publisher' => 'Vintage Crime', 
            'year' => 1988, 
            'description' => 'Down these mean streets a man must go who is not himself mean, who is neither tarnished nor afraid.... He is the hero; he is everything. He must be a complete man and a common man and yet an unusual man. This is the Code of the Private Eye as defined by Raymond Chandler in his 1944 essay "The Simple Act of Murder." Such a man was Philip Marlowe, private eye, an educated, heroic, streetwise, rugged individualist and the hero of Chandler’s first novel, The Big Sleep. This work established Chandler as the master of the ’hard-boiled’ detective novel, and his articulate and literary style of writing won him a large audience, which ranged from the man in the street to the most sophisticated intellectual.'], 

            ['book_id' => 9, 
            'author' => 'Mary Shelley', 
            'publisher' => 'William Collins', 
            'year' => 1818, 
            'description' => 'Victor Frankenstein’s monster is stitched together from the limbs of the dead, taken from ‘the dissecting room and the slaughter-house’. The result is a grotesque being who, rejected by his maker and starved of human companionship, sets out on a journey to seek his revenge. In the most famous gothic horror story ever told, Shelley confronts the limitations of science, the nature of human cruelty and the pathway to forgiveness.'], 

            ['book_id' => 10, 
            'author' => 'Susan Wise Bauer', 
            'publisher' => 'W. W. Norton & Company', 
            'year' => 2007, 
            'description' => 'This is the first volume in a bold new series that tells the stories of all peoples, connecting historical events from Europe to the Middle East to the far coast of China, while still giving weight to the characteristics of each country. Susan Wise Bauer provides both sweeping scope and vivid attention to the individual lives that give flesh to abstract assertions about human history. Dozens of maps provide a clear geography of great events, while timelines give the reader an ongoing sense of the passage of years and cultural interconnection. This narrative history employs the methods of “history from beneath”—literature, epic traditions, private letters and accounts—to connect kings and leaders with the lives of those they ruled. The result is an engrossing tapestry of human behavior from which we may draw conclusions about the direction of world events and the causes behind them.'], 

            ['book_id' => 11, 
            'author' => 'David Graeber', 
            'publisher' => 'Farrar, Straus and Giroux', 
            'year' => 2021, 
            'description' => 'For generations, our remote ancestors have been cast as primitive and childlike—either free and equal innocents, or thuggish and warlike. Civilization, we are told, could be achieved only by sacrificing those original freedoms or, alternatively, by taming our baser instincts. David Graeber and David Wengrow show how such theories first emerged in the eighteenth century as a conservative reaction to powerful critiques of European society posed by Indigenous observers and intellectuals. Revisiting this encounter has startling implications for how we make sense of human history today, including the origins of farming, property, cities, democracy, slavery, and civilization itself. Drawing on pathbreaking research in archaeology and anthropology, the authors show how history becomes a far more interesting place once we learn to throw off our conceptual shackles and perceive what’s really there. If humans did not spend 95 percent of their evolutionary past in tiny bands of hunter-gatherers, what were they doing all that time? If agriculture, and cities, did not mean a plunge into hierarchy and domination, then what kinds of social and economic organization did they lead to? The answers are often unexpected, and suggest that the course of human history may be less set in stone, and more full of playful, hopeful possibilities, than we tend to assume.'], 

            ['book_id' => 12, 
            'author' => 'Jennifer L. Armentrout', 
            'publisher' => 'Blue Box Press', 
            'year' => 2021, 
            'description' => 'She’s been the victim and the survivor… Poppy never dreamed she would find the love she’s found with Prince Casteel. She wants to revel in her happiness but first they must free his brother and find hers. It’s a dangerous mission and one with far-reaching consequences neither dreamed of. Because Poppy is the Chosen, the Blessed. The true ruler of Atlantia. She carries the blood of the King of Gods within her. By right the crown and the kingdom are hers. The enemy and the warrior… Poppy has only ever wanted to control her own life, not the lives of others, but now she must choose to either forsake her birthright or seize the gilded crown and become the Queen of Flesh and Fire. But as the kingdoms’ dark sins and blood-drenched secrets finally unravel, a long-forgotten power rises to pose a genuine threat. And they will stop at nothing to ensure that the crown never sits upon Poppy’s head. A lover and heartmate… But the greatest threat to them and to Atlantia is what awaits in the far west, where the Queen of Blood and Ash has her own plans, ones she has waited hundreds of years to carry out. Poppy and Casteel must consider the impossible—travel to the Lands of the Gods and wake the King himself. And as shocking secrets and the harshest betrayals come to light, and enemies emerge to threaten everything Poppy and Casteel have fought for, they will discover just how far they are willing to go for their people—and each other. And now she will become Queen…'], 

            ['book_id' => 13, 
            'author' => 'Abby Jimenez', 
            'publisher' => 'Forever', 
            'year' => 2021, 
            'description' => 'When Vanessa Price quit her job to pursue her dream of traveling the globe, she wasn’t expecting to gain millions of YouTube followers who shared her joy of seizing every moment. For her, living each day to its fullest isn’t just a motto. Her mother and sister never saw the age of 30, and Vanessa doesn’t want to take anything for granted. But after her half sister suddenly leaves Vanessa in custody of her baby daughter, life goes from "daily adventure" to "next-level bad" (now with bonus baby vomit in hair). The last person Vanessa expects to show up offering help is the hot lawyer next door, Adrian Copeland. After all, she barely knows him. No one warned her that he was the Secret Baby Tamer or that she’d be spending a whole lot of time with him and his geriatric Chihuahua. Now she’s feeling things she’s vowed not to feel. Because the only thing worse than falling for Adrian is finding a little hope for a future she may never see.'], 

            ['book_id' => 14, 
            'author' => 'Paula Hawkins', 
            'publisher' => 'Riverhead Books', 
            'year' => 2021, 
            'description' => 'The scorching new thriller from the number-one ’New York Times’ best-selling author of ’The Girl on the Train’. When a young man is found gruesomely murdered in a London houseboat, it triggers questions about three women who knew him. Laura is the troubled one-night-stand last seen in the victim’s home. Carla is his grief-stricken aunt, already mourning the recent death of yet another family member. And Miriam is the nosy neighbor clearly keeping secrets from the police. Three women with separate connections to the victim. Three women who are – for different reasons – simmering with resentment. Who are, whether they know it or not, burning to right the wrongs done to them. When it comes to revenge, even good people might be capable of terrible deeds. How far might any one of them go to find peace? How long can secrets smolder before they explode into flame? Look what you started.'], 

            ['book_id' => 15, 
            'author' => 'Anderson Cooper', 
            'publisher' => 'Harper', 
            'year' => 2021, 
            'description' => 'New York Times bestselling author and journalist Anderson Cooper teams with New York Times bestselling historian and novelist Katherine Howe to chronicle the rise and fall of a legendary American dynasty—his mother’s family, the Vanderbilts. When eleven-year-old Cornelius Vanderbilt began to work on his father’s small boat ferrying supplies in New York Harbor at the beginning of the nineteenth century, no one could have imagined that one day he would, through ruthlessness, cunning, and a pathological desire for money, build two empires—one in shipping and another in railroads—that would make him the richest man in America. His staggering fortune was fought over by his heirs after his death in 1877, sowing familial discord that would never fully heal. Though his son Billy doubled the money left by “the Commodore,” subsequent generations competed to find new and ever more extraordinary ways of spending it. By 2018, when the last Vanderbilt was forced out of The Breakers—the seventy-room summer estate in Newport, Rhode Island, that Cornelius’s grandson and namesake had built—the family would have been unrecognizable to the tycoon who started it all. Now, the Commodore’s great-great-great-grandson Anderson Cooper, joins with historian Katherine Howe to explore the story of his legendary family and their outsized influence. Cooper and Howe breathe life into the ancestors who built the family’s empire, basked in the Commodore’s wealth, hosted lavish galas, and became synonymous with unfettered American capitalism and high society. Moving from the hardscrabble wharves of old Manhattan to the lavish drawing rooms of Gilded Age Fifth Avenue, from the ornate summer palaces of Newport to the courts of Europe, and all the way to modern-day New York, Cooper and Howe wryly recount the triumphs and tragedies of an American dynasty unlike any other. Written with a unique insider’s viewpoint, this is a rollicking, quintessentially American history as remarkable as the family it so vividly captures.'], 
        ]);
    }
}
