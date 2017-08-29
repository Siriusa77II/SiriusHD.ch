$(document).ready(function() {
  var windowH = $(window).innerHeight();
  $('body').css('min-height', windowH);

  generate();

  function generate() {
    var quotes = [
      "Good news, everyone! @Professor Farnsworth",
      "You win again, gravity! @Zapp Brannigan",
      "If for any reason you’re not satisfied, I hate you. @Shop Clerk",
      "It's just like the story of the grasshopper and the octopus. All year long the grasshopper kept burying acorns for winter while the octopus mooched off his girlfriend and watched TV. Then the winter came, and the grasshopper died, and the octopus ate all his acorns and also he got a racecar. Is any of this getting through to you? @Fry",
      "My folks were always on me to groom myself and wear underpants. What am I, the pope? @Fry",
      "Oh. Your. God.@Bender",
      "You may need to metaphorically make a deal with the devil. By 'devil' I mean robot devil and by 'metaphorically' I mean get your coat.@Bender",
      "At the risk of sounding negative, no.@Leela",
      "Everyone's always in favour of saving Hitler's brain. But when you put it in the body of a great white shark, ooohh! Suddenly you've gone too far!@Professor Farnsworth",
      "Friends! Help! A guinea pig tricked me!@Dr. Zoidberg",
      "If we hit that bullseye, the rest of the dominos will fall like a house of cards. Checkmate.@Zapp Brannigan",
      "Kittens give Morbo gas.@Morbo",
      "Have you ever tried simply turning off the TV, sitting down with your children, and hitting them?@Bender",
      "You can't just have your characters announce how they feel! That makes me feel angry!@Robot Devil",
      "I find the most erotic part of a woman is the boobies.@Kif/Zapp Brannigan",
      "I'll make my own theme park, with blackjack and hookers!@Bender",
      "When you do things right, people won't be sure you've done anything at all.@God Nebula",
      "Ah, she's built like a steakhouse, but she handles like a bistro!@Zapp Brannigan",
      "It's not uncharted, you lost the charts!@Kif",
      "[sigh]@Kif",
      "It's like there's a party in my mouth and everybody's throwing up.@Fry",
      "You can't keep boogeying like this, Fry. You'll come down with some sort of fever.@Leela",
      "Kif, I have made it with a woman. Inform the men!@Zapp Brannigan",
      "Tonight's story: the world's water has been replaced with alcohol and everybody is titty much protally fit-shaced.@Morbo",
      "And now, I'm going to leave for no raisin.@Giant Brain",
      "Me? A giant ham? [Falls to knees] GOD'S WOUNDS!@Calculon",
      "You can't give up hope just because it's hopeless! You gotta hope even more, and cover your ears, and go ‘blah-blah-blah-blah-blah-blah-blah-blah’!@Fry",
      "You buy one pound of underwear and you're on their list forever.@Leela",
      "Amy, if I said you said you had a beautiful body would you take your pants off and dance around a little?@Kif/Zapp Brannigan",
      "Every time something good happens to me you say it's some kind of madness. Or I'm drunk. Or I ate too much candy.@Fry"
    ];

    randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
    quoteAuthor = randomQuote.split("@");
    $('.quote-content').text(quoteAuthor[0]);
    $('.quote-author').text(quoteAuthor[1]);
    $('.quote-tweet').prop('href', 'https://twitter.com/home/?status=' + quoteAuthor[0] + ' - ' + quoteAuthor[1] + ' bit.ly/1nQrjNM')
  }

  $("#generate").on("click", function() {
    generate();
  });

});