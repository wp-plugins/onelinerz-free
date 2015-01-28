<?php
/**
 * @package Onelinerz-free
 * @version 1.3
 */
/*
Plugin Name: Onelinerz-free
Plugin URI: http://skyblue-soft.com/wordpress-plugins/ 
Description: This plugin will randomly display a funny oneliner from our <cite>Onelinerz-free plugin</cite> in the upper right of your admin screen as well as a colorized, animated version on every main page that your visitors can see.  This is the FREE version of this plugin. If you like it, please consider the Premium version of the plugin, that contains many more quips, setting options and is updated regularly. Additionally, premium users get priority support.
Author: Corley Efurd (cor@skyblue-soft.com)
Version: 1.2
Author URI: http://www.skyblue-soft.com 
*/

include 'includes/options.php';

function get_oneliner() {

  $oneliner_list = "If the number 2 pencil is the most popular, why is it still number 2?
Strangers have the best candy.
How do you get holy water? Boil the hell out of it.
Everybody is somebody else’s weirdo.
With a calendar, your days are numbered.
If it’s true that we are here to help others, then what exactly are the others here for?
Being in a nudist colony probably takes all the fun out of Halloween.
A hard thing about a business is minding your own.
Does time fly when you’re having sex or was it really just one minute?
It’s bad luck to be superstitious.
Why is a bra singular and panties plural?
Constipated people don’t give a crap.
You are depriving some poor village of its idiot.
I tried to hang myself with a bungee chord, I kept almost dying.
Bills travel through the mail at twice the speed.
Very funny, Scotty. Now beam down my clothes! 
If you are here - who is running hell?
Sure, I'd love to help you out ... now, which way did you come in?
I would like to slip into something more comfortable - like a coma.
I started with nothing, and I still have most of it.
Isn't it scary that doctors call what they do \"practice\"?
Always remember you're unique, just like everyone else.
Everybody repeat after me: \"We are all individuals.\"
I want patience - AND I WANT IT NOW!!!!
A day for firm decisions! Or is it?
Am I ambivalent? Well, yes and no.
How many of you believe in telekinesis? Raise MY hand!
I drive way too fast to worry about cholesterol.
When everything's coming your way, you're in the wrong lane and going the wrong way.
I wanna go to IKEA, hide in a wardrobe, wait for someone to open it & yell \"WELCOME TO NARNIA\"!
Life is sexually transmitted.
Practice safe sex, Go screw yourself.
Cleverly disguised as a responsible adult.
Some days you’re the dog, some days you’re the hydrant.
I should’ve known it wasn’t going to work out between my ex-gf and me. After all, I’m a Pisces and she’s a bitch.
Change is inevitable, except from a vending machine.
Just about the time when you think you can make ends meet, somebody moves the ends.
likes to use words, irregardless of their existence.
My girlfriend thinks that I’m a stalker. Well, she’s not exactly my girlfriend yet.
The ‘L’ in my luck has been replaced with an ‘F’.
Thinks that the “speaking to another human being” feature of my phone has got to be my least favorite feature.
Give a person a fish and you feed them for a day; teach that person to use the Internet and they won't bother you for weeks.
Place a stool sample when an elevator door is about to close & yell to people inside 'Folks you have to take this shit to a whole new level'
Whenever I feel blue, I start breathing again.
Why does a slight tax increase cost you two hundred dollars and a substantial tax cut saves you thirty cents?
In the 60's people took acid to make the world weird. Now the world is weird and people take Prozac to make it normal.
Politics is supposed to be the second oldest profession. I have come to realize that it bears a very close resemblance to the first.
Why is it that when you're driving and looking for an address, you turn down the volume on the radio?
Why is lemon juice made with artificial flavor, and dishwashing liquid made with real lemons?
Why is the man who invests all your money, called a broker?
Why is the third hand on the watch called a second hand?
Why is the time of day with the slowest traffic called rush hour?
Why isn't there a special name for the tops of your feet?
Why isn't there mouse flavored cat food? There is fish flavored!
Can a stupid person be a smart-ass?
Can fat people go skinny-dipping?
Why don't you ever see the headline \"Psychic Wins Lottery\"?
Why does the sun lighten our hair, but darken our skin?
Why doesn't glue stick to the inside of the bottle?
Why is \"abbreviated\" such a long word?
Why is a boxing ring square?
Why is it called lipstick if you can still move your lips?
Why is it considered necessary to nail down the lid of a coffin?
Why is it that doctors call what they do \"practice\"? 
Why is it that rain drops but snow falls?
Why is it that to stop Windows 95, you have to click on \"Start\"?  
Do not argue with an idiot. He will drag you down to his level and beat you with experience.
I want to die peacefully in my sleep, like my grandfather.. Not screaming and yelling like the passengers in his car.
I asked God for a bike, but I know God doesn't work that way. So I stole a bike and asked for forgiveness.
If I agreed with you we'd both be wrong.
Men have two emotions: Hungry and Horny. If you see him without an erection, make him a sandwich.
We never really grow up, we only learn how to act in public. 
Knowledge is knowing a tomato is a fruit; Wisdom is not putting it in a fruit salad. 
The early bird might get the worm, but the second mouse gets the cheese.
Evening news is where they begin with 'Good evening', and then proceed to tell you why it isn't.
If sex is a pain in the ass, then you're doing it wrong...
To steal ideas from one person is plagiarism. To steal from many is research.
If God is watching us, the least we can do is be entertaining.
If you think nobody cares if you're alive, try missing a couple of payments.
Some people are like Slinkies ... not really good for anything, but you can't help smiling when you see one tumble down the stairs.
Did you know that dolphins are so smart that within a few weeks of captivity, they can train people to stand on the very edge of the pool and throw them fish?
I thought I wanted a career, turns out I just wanted paychecks.
I didn't fight my way to the top of the food chain to be a vegetarian.
A computer once beat me at chess, but it was no match for me at kick boxing.
I saw a woman wearing a sweat shirt with \"Guess\" on it...so I said \"Implants?\"
Why does someone believe you when you say there are four billion stars, but check when you say the paint is wet?
The sole purpose of a child's middle name, is so he can tell when he's really in trouble.
Why do Americans choose from just two people to run for president and 50 for Miss America?
We have enough gun control. What we need is idiot control.
Worrying works! 90% of the things I worry about never happen.
Never hit a man with glasses. Hit him with a baseball bat.
There's a fine line between cuddling and holding someone down so they can't get away.
Don't under estimate me... unless you're trying to guess how old I am or how much I weigh.
A New Year’s resolution is something that goes in one Year and out the other.
The problem with people who have no vices is that you can pretty much figure they're going to have some pretty annoying virtues.
Budget: a record of where your money should have been spent.
They're eating scorpions on Fear Factor. If they pass this round it's onto my mom's fruit cake.
Dandruff is so festive this time of year.
I just found out that grilled chicken is much more delicious if you get it fried.
Ask your doctor if taking a pill to solve all your problems is right for you.
Right before I die, I'm gonna to say to whoever is next to me, \"I left a million dollars in the...\"
I want them to put \"I told you I was sick\" on my tombstone.
Waiter: \"Tonight's special is snails.\" Diner: \"And I see you've dressed them as waiters.\"
What we should really fear is unidentified landing objects.
5 more minutes of sleep, that's all I ask. But please don't start the countdown for another 2 hours.
Talk is cheap because supply exceeds demand.
Never declare war on the young...They'll outlast you. They'll out think you. They'll outdo you - Harvey Silverglate
Make me a sandwich, no? ok $ sudo make me a sandwich.
How fights get started: Wife: What's for breakfast. Husband: *eyeing the box of nut-n-bitch cereal on the table*
The only cure for swine flu is porkrinds. For vegetarians funnyuns might work. Personally I doubt it.
Sex is not the answer. Sex is the question. \"Yes\" is the answer.
We live in a society where pizza gets to your house before the police. #SadButTrue
Women might be able to fake orgasms. But men can fake a whole relationship.
The last thing I want to do is hurt you. But it's still on the list.
Light travels faster than sound. This is why some people appear bright until you hear them speak.
Politicians and diapers have one thing in common. They should both be changed regularly, and for the same reason.
My mother never saw the irony in calling me a son-of-a-bitch.
If 4 out of 5 people SUFFER from diarrhea... does that mean that one enjoys it?
A bus station is where a bus stops. A train station is where a train stops. On my desk, I have a work station..
Whenever I fill out an application, in the part that says \"If an emergency, notify:\" I put \"DOCTOR\". What's my mother going to do?
A computer once beat me at chess, but it was no match for me at kick boxing.
I didn't say it was your fault, I said I was blaming you.
The shinbone is a device for finding furniture in a dark room.
The voices in my head may not be real, but they have some good ideas!
I intend to live forever. So far, so good.
Worrying works! 90% of the things I worry about never happen.
Just remember...if the world didn't suck, we'd all fall off.
I always take life with a grain of salt, ...plus a slice of lemon, ...and a shot of tequila.
I used to be indecisive. Now I'm not sure.
Does this rag smell like chloroform to you?
Hallmark Card: \"I'm so miserable without you, it's almost like you're still here.\"
Nostalgia isn't what it used to be.
love is not etched on wordpress.. wait it just was - Lao tzu
I seem to be getting pretty excited over this wordpress stuff. Maybe I should let friend drag me to speed dating - at least i'd get offline.
On an alternate Earth, electricity is measured in Travoltas.
";

  // Split it into lines.
  $oneliner_list = explode( "\n", $oneliner_list );

  // Get a random line.
  return wptexturize( $oneliner_list[ mt_rand( 0, count( $oneliner_list ) - 1 ) ] );
}

// Define how we show our banner on the admin page.
// We apply very simple CSS for the admin pages.
function oneliner_css_admin() {
  // fix for right-to-left languages as well.
  $x = is_rtl() ? 'left' : 'right';
  $myline = "";
  $myline = get_oneliner();
  echo "<div id='oneliner'>$myline</div>
  <style type='text/css'>
  #oneliner {
    float: $x;
    padding-$x: 15px;
    padding-top: 0px;
    margin: 0;
    font-size: 12px;
  }
  </style>
  ";
}

// Define how our banner shows on the main site.
// Spruce it up with some CSS on the main site, and some animation.
// Note we don't do all the animations for the admin pages.
function oneliner_css_main() {

  $option_ary = get_option('plugin_options');
  $mycolorz_start = $option_ary['dropdown1'];
  $mycolorz_end = $option_ary['dropdown2'];
  $mypoz = $option_ary['dropdown3'];

  $theme_name = get_current_theme();
  $myline = "";
  $myline = get_oneliner();

  // The head of the CSS.
  $mycss1 = "
  <div id='oneliner'>$myline</div>
  <style type='text/css'>
  @-webkit-keyframes resize {
  0% {
  padding: 0;
  width: 60%;
  ";

  // Colors "Red", "Green", "Blue", "Orange", "White", "Violet", "Yellow", "Tan", "Black", "Grey", "Creme", "Brown".
  // Create CSS for intro colors.
  switch ($mycolorz_start) {
    case "Red":
      $mycss2 = "
      background-color:rgba(255,0,0,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(255,0,0,.6);
      ";
    break;
    case "Green":
      $mycss2 = "
      background-color:rgba(43,203,44,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(43,203,44,.6);
      ";
    break;
    case "Blue":
      $mycss2 = "
      background-color:rgba(0,0,255,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(0,0,255,.6);
      ";
    break;
    case "Orange":
      $mycss2 = "
      background-color:rgba(255,150,0,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(255,150,0,.6);
      ";
    break;
    case "White":
      $mycss2 = "
      background-color:rgba(255,255,255,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(255,255,255,.6);
      ";
    break;
    case "Violet":
      $mycss2 = "
      background-color:rgba(104,45,132,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(104,45,132,.6);
      ";
    break;
    case "Yellow":
      $mycss2 = "
      background-color:rgba(255,255,0,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(255,255,0,.6);
      ";
    break;
    case "Black":
      $mycss2 = "
      background-color:rgba(0,0,0,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(0,0,0,.6);
      ";
    break;
    case "Grey":
      $mycss2 = "
      background-color:rgba(127,127,127,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(127,127,127,.6);
      ";
    break;
    case "Creme":
      $mycss2 = "
      background-color:rgba(247,246,233,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(247,246,233,.6);
      ";
    break;
    case "Brown":
      $mycss2 = "
      background-color:rgba(65,34,0,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(65,34,0,.6);
      ";
    break;
  default:
    $mycss2 = "
    background-color:rgba(255,200,0,1);
    }
    50% {
    padding: 0 10%;
    background-color:rgba(255,200,0,.6);
    ";
  break;
  }

  $mycss3 = "
  }
  100% {
  ";

  // Colors "Red", "Green", "Blue", "Orange", "White", "Violet", "Yellow", "Tan", "Black", "Grey", "Creme", "Brown".
  // Setup the final css colors.
  switch ($mycolorz_end) {
    case "Red":
      $mycss4 = "
      background-color: rgba(255,0,0,.4);
      ";
    break;
    case "Green":
      $mycss4 = "
      background-color: rgba(43,203,44,.4);
      ";
    break;
    case "Blue":
      $mycss4 = "
      background-color: rgba(0,0,255,.4);
      ";
    break;
    case "Orange":
      $mycss4 = "
      background-color: rgba(255,150,0,.4);
      ";
    break;
    case "White":
      $mycss4 = "
      background-color: rgba(255,255,255,1);
      ";
    break;
    case "Violet":
      $mycss4 = "
      background-color: rgba(104,45,132,.4);
      ";
    break;
    case "Yellow":
      $mycss4 = "
      background-color: rgba(255,255,0,.4);
      ";
    break;
    case "Black":
      $mycss4 = "
      background-color: rgba(0,0,0,.4);
      ";
    break;
    case "Grey":
      $mycss4 = "
      background-color: rgba(127,127,127,.4);
      ";
    break;
    case "Creme":
      $mycss4 = "
      background-color: rgba(247,246,233,1);
      ";
    break;
    case "Brown":
      $mycss4 = "
      background-color: rgba(65,34,0,.4);
      ";
    break;
  default:
    $mycss4 = "
    background-color: rgba(255,200,0,.4);
    ";
  break;
  }

  // Setup lower CSS here.
  $mycss5 = "
  padding: 0 30%;
  }
  }
  ";

  // Do it all over for non-webkit 
  // Yes I know I could just detect browser and safe code, but this doesn't always work properly,
  // so I'm doing it properly :)

  $mycss6 = "
  @keyframes resize {
  0% {
  padding: 0;
  width: 60%;
  ";

  // Colors "Red", "Green", "Blue", "Orange", "White", "Violet", "Yellow", "Tan", "Black", "Grey", "Creme", "Brown".
  // Create CSS for intro colors.
  switch ($mycolorz_start) {
    case "Red":
      $mycss7 = "
      background-color:rgba(255,0,0,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(255,0,0,.6);
      ";
    break;
    case "Green":
      $mycss7 = "
      background-color:rgba(43,203,44,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(43,203,44,.6);
      ";
    break;
    case "Blue":
      $mycss7 = "
      background-color:rgba(0,0,255,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(0,0,255,.6);
      ";
    break;
    case "Orange":
      $mycss7 = "
      background-color:rgba(255,150,0,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(255,150,0,.6);
      ";
    break;
    case "White":
      $mycss7 = "
      background-color:rgba(255,255,255,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(255,255,255,.6);
      ";
    break;
    case "Violet":
      $mycss7 = "
      background-color:rgba(104,45,132,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(104,45,132,.6);
      ";
    break;
    case "Yellow":
      $mycss7 = "
      background-color:rgba(255,255,0,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(255,255,0,.6);
      ";
    break;
    case "Black":
      $mycss7 = "
      background-color:rgba(0,0,0,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(0,0,0,.6);
      ";
    break;
    case "Grey":
      $mycss7 = "
      background-color:rgba(127,127,127,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(127,127,127,.6);
      ";
    break;
    case "Creme":
      $mycss7 = "
      background-color:rgba(247,246,233,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(247,246,233,.6);
      ";
    break;
    case "Brown":
      $mycss7 = "
      background-color:rgba(65,34,0,1);
      }
      50% {
      padding: 0 10%;
      background-color:rgba(65,34,0,.6);
      ";
    break;
  default:
    $mycss7 = "
    background-color:rgba(255,200,0,1);
    }
    50% {
    padding: 0 10%;
    background-color:rgba(255,200,0,.6);
    ";
  break;
  }

  $mycss8 = "
  }
  100% {
  ";

  // Colors "Red", "Green", "Blue", "Orange", "White", "Violet", "Yellow", "Tan", "Black", "Grey", "Creme", "Brown".
  // Setup the final css colors.
  switch ($mycolorz_end) {
    case "Red":
      $mycss9 = "
      background-color: rgba(255,0,0,.4);
      ";
    break;
    case "Green":
      $mycss9 = "
      background-color: rgba(43,203,44,.4);
      ";
    break;
    case "Blue":
      $mycss9 = "
      background-color: rgba(0,0,255,.4);
      ";
    break;
    case "Orange":
      $mycss9 = "
      background-color: rgba(255,150,0,.4);
      ";
    break;
    case "White":
      $mycss9 = "
      background-color: rgba(255,255,255,1);
      ";
    break;
    case "Violet":
      $mycss9 = "
      background-color: rgba(104,45,132,.4);
      ";
    break;
    case "Yellow":
      $mycss9 = "
      background-color: rgba(255,255,0,.4);
      ";
    break;
    case "Black":
      $mycss9 = "
      background-color: rgba(0,0,0,.4);
      ";
    break;
    case "Grey":
      $mycss9 = "
      background-color: rgba(127,127,127,.4);
      ";
    break;
    case "Creme":
      $mycss9 = "
      background-color: rgba(247,246,233,1);
      ";
    break;
    case "Brown":
      $mycss9 = "
      background-color: rgba(65,34,0,.4);
      ";
    break;
  default:
    $mycss9 = "
    background-color: rgba(255,200,0,.4);
    ";
  break;
  }

  // Setup lower CSS here.
  $mycss10 = "
  padding: 0 30%;
  }
  }

  #oneliner {
  ";

  // Setup lower CSS with height here.
  switch ($mypoz) {
    case "Top": 
      if ($theme_name == "Twenty Fourteen") 
      {
        $mycss11 = "
        height: 25px auto;
        width: 100%;
        position: absolute; top: 80;
        ";
      } else {
        $mycss11 = "
        height: 25px auto;
        width: 100%;
        ";
      }
    break;
    case "Middle": 
      $mycss11 = "
      height: 25px auto;
      width: 100%;
      position: absolute; top: 308;
      ";
    break;
    case "Bottom": 
      $mycss11 = "
      height: 25px auto;
      width: 100%;
      position: fixed; bottom: 0;
      ";
    break;
  default:
    $mycss11 = "
    height: 25px auto;
    ";
  break;
  }

  // Setup bottom CSS here.

  $mycss12 = "
  -webkit-animation-name: resize;
  -webkit-animation-duration: 3s;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-direction: normal; 
  -webkit-animation-timing-function: ease-out;
  -webkit-animation-fill-mode: forwards;
  z-index: 1;

  animation-name: resize;
  animation-duration: 3s;
  animation-iteration-count: 1;
  animation-direction: normal; 
  animation-timing-function: ease-out;
  animation-fill-mode: forwards;
  z-index: 1;
  }
  </style>
  ";

  // echo out final css here

  $myfinalcss = $mycss1.$mycss2.$mycss3.$mycss4.$mycss5.$mycss6.$mycss7.$mycss8.$mycss9.$mycss10.$mycss11.$mycss12;
  echo $myfinalcss;
}


// If we are loading the adminpage, then just use small CSS format changes.
// Otherwise load the regular page.
if ( !in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) ) ) {
  if(!is_admin()) {
    add_action( 'wp_loaded', 'oneliner_css_main' );
  } else {
    add_action( 'admin_head', 'oneliner_css_admin' );
  }
}
