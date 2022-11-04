<img src="https://media.giphy.com/media/38TVRhxujjyjO3fM2C/giphy.gif" width="100%">

# Fantasy Genre

Learn more about some of my favorite fantasy authors and their works!

my site [https://robinpn.se/]

# Installation

No installation required.

# Code Review

Code review written by [Josef Forkman](https://github.com/JosefForkman).

- `index.js:90` - Man behöver inte skriva $email != "" utan man kan bara skriva $email. [Tom string = false](https://www.php.net/manual/en/types.comparisons.php). Man skulle också kunna använda `!empty($email)` som gör exakt vad du är ute efter.
- `functions.php:15` - Här blir man inte klok om det är ett namn eller om det ska vara fler i parameten för funktionen. Fundera på att byta ut det mot `$names` eller `$nameArray` så man vet att det är flera namn man är ute efter.
- `functions.php:25-29` - Tips man byta ut denna ifelse mot `echo $writer['is_active'] == 1 ? "active" : "no longer writing";`. Med denna förkortade ifelse gör så att du inte behöver ha flera echo utan bara en.
- `style.css` - Försök att organisera din css fill med antingen kommentarer eller separata css filler. Kanske det inte behövs i detta skedet men när denna hemsidan blir större så kommer det bli svårt att följa din css. Ett exempel kan vara alla kod för Author kan se ut så här där du börjar skriva styles för Author `/* Authors section */`. För då kommer det bli tydligt var det startar och slutar.  
- `index.php:38` - Skulle vara trevligt om du kan utöka denna arrayer i `variables.php` så att bilden är en länk till varje författares hemsida/blogg. Detta för att man kan se vad hen har skrivit för böker.
- `variables.php` skulle denna filen döpas om till `författare.php` eller `author.php`. Om du inte har någon tanke att ha något mer i denna fil.


# Testers

Tested by the following people:

1. Axel Enghamre
2. Magnus Vargvinter
