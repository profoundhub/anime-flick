
# The movieDB:

### For rendering images:
You will need 3 pieces of data:
- `base_url`
- `size`
- `file_path`

In the following fasion: http://image.tmdb.org/t/p/[IMAGE_SIZE_HERE]/[IMAGE_PATH_HERE]&api_key=[API_KEY_HERE]


--------------------------

- http://api.themoviedb.org/3/search/movie?query=batman&page=1&api_key=75949cf5078ca46d2330f51fb2221e0f
- http://api.themoviedb.org/3/discover/movie?primary_release_date.gte=2014-09-15&primary_release_date.lte=2014-10-22&api_key=

### IMPORTANT to include in footer: https://www.themoviedb.org/about/logos-attribution


--------------------------

API Example:

```
{
  "page": 1,
  "results": [
    {
      "poster_path": "/kBf3g9crrADGMc2AMAMlLBgSm2h.jpg",
      "adult": false,
      "overview": "The Dark Knight of Gotham City begins his war on crime with his first major enemy being the clownishly homicidal Joker, who has seized control of Gotham's underworld.",
      "release_date": "1989-06-23",
      "genre_ids": [
        14,
        28
      ],
      "id": 268,
      "original_title": "Batman",
      "original_language": "en",
      "title": "Batman",
      "backdrop_path": "/2blmxp2pr4BhwQr74AdCfwgfMOb.jpg",
      "popularity": 5.318254,
      "vote_count": 1049,
      "video": false,
      "vote_average": 6.84
    },
    {
      "poster_path": "/xkptUwXpjvEXEpiPbmneEeNWT3x.jpg",
      "adult": false,
      "overview": "The Dynamic Duo faces four super-villains who plan to hold the world for ransom with the help of a secret invention that instantly dehydrates people.",
      "release_date": "1966-07-30",
      "genre_ids": [
        10751,
        12,
        35,
        878,
        80
      ],
      "id": 2661,
      "original_title": "Batman",
      "original_language": "en",
      "title": "Batman",
      "backdrop_path": "/5gcdof2PKH1emllBdN1VXU706IP.jpg",
      "popularity": 2.181705,
      "vote_count": 86,
      "video": false,
      "vote_average": 5.82
    },
    {
      "poster_path": "/xiosOeLfzPbfLfqui41kSWnO0sZ.jpg",
      "adult": false,
      "overview": "Driven by tragedy, billionaire Bruce Wayne dedicates his life to uncovering and defeating the corruption that plagues his home, Gotham City.  Unable to work within the system, he instead creates a new identity, a symbol of fear for the criminal underworld - The Batman.",
      "release_date": "2005-06-14",
      "genre_ids": [
        28,
        80,
        18
      ],
      "id": 272,
      "original_title": "Batman Begins",
      "original_language": "en",
      "title": "Batman Begins",
      "backdrop_path": "/65JWXDCAfwHhJKnDwRnEgVB411X.jpg",
      "popularity": 6.037186,
      "vote_count": 4359,
      "video": false,
      "vote_average": 7.31
    },
    {
      "poster_path": "/cGOPbv9wA5gEejkUN892JrveARt.jpg",
      "adult": false,
      "overview": "Fearing the actions of a god-like Super Hero left unchecked, Gotham City’s own formidable, forceful vigilante takes on Metropolis’s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it’s ever known before.",
      "release_date": "2016-03-23",
      "genre_ids": [
        28,
        12,
        14
      ],
      "id": 209112,
      "original_title": "Batman v Superman: Dawn of Justice",
      "original_language": "en",
      "title": "Batman v Superman: Dawn of Justice",
      "backdrop_path": "/vsjBeMPZtyB7yNsYY56XYxifaQZ.jpg",
      "popularity": 34.286549,
      "vote_count": 3121,
      "video": false,
      "vote_average": 5.52
    },
    {
      "poster_path": "/zm0ODjtfJfJW0W269LqsQl5OhJ8.jpg",
      "adult": false,
      "overview": "As Batman hunts for the escaped Joker, the Clown Prince of Crime attacks the Gordon family to prove a diabolical point mirroring his own fall into madness. Based on the graphic novel by Alan Moore and Brian Bolland.",
      "release_date": "2016-07-24",
      "genre_ids": [
        28,
        16,
        80,
        18
      ],
      "id": 382322,
      "original_title": "Batman: The Killing Joke",
      "original_language": "en",
      "title": "Batman: The Killing Joke",
      "backdrop_path": "/7AxMc1Mgm3xD2lySdM6r0sQGS3s.jpg",
      "popularity": 7.019164,
      "vote_count": 84,
      "video": false,
      "vote_average": 6.17
    },
    {
      "poster_path": "/jX5THE1yW3zTdeD9dupcIyQvKiG.jpg",
      "adult": false,
      "overview": "Having defeated the Joker, Batman now faces the Penguin - a warped and deformed individual who is intent on being accepted into Gotham society. Crooked businessman Max Schreck is coerced into helping him become Mayor of Gotham and they both attempt to expose Batman in a different light. Selina Kyle, Max's secretary, is thrown from the top of a building and is transformed into Catwoman - a mysterious figure who has the same personality disorder as Batman. Batman must attempt to clear his name, all the time deciding just what must be done with the Catwoman.",
      "release_date": "1992-06-19",
      "genre_ids": [
        28,
        80,
        14,
        878,
        53
      ],
      "id": 364,
      "original_title": "Batman Returns",
      "original_language": "en",
      "title": "Batman Returns",
      "backdrop_path": "/wNIE5dpkiHU2csDRptMutFjAGiV.jpg",
      "popularity": 3.418537,
      "vote_count": 789,
      "video": false,
      "vote_average": 6.5
    },
    {
      "poster_path": "/7wnRn8iQ0QInEK1CaZFqw1zPhht.jpg",
      "adult": false,
      "overview": "Japanese spymaster Prince Daka operates a covert espionage organization located in Metropolis' now-deserted Little Tokyo which turns American scientists into pliable zombies.",
      "release_date": "1943-07-16",
      "genre_ids": [
        28,
        12
      ],
      "id": 125249,
      "original_title": "Batman",
      "original_language": "en",
      "title": "Batman",
      "backdrop_path": "/mcO3jiFRw8t4R8R1fnWyuXchBCG.jpg",
      "popularity": 1.125411,
      "vote_count": 9,
      "video": false,
      "vote_average": 6.39
    },
    {
      "poster_path": "/79AYCcxw3kSKbhGpx1LiqaCAbwo.jpg",
      "adult": false,
      "overview": "Along with crime-fighting partner Robin and new recruit Batgirl, Batman battles the dual threat of frosty genius Mr. Freeze and homicidal horticulturalist Poison Ivy. Freeze plans to put Gotham City on ice, while Ivy tries to drive a wedge between the dynamic duo.",
      "release_date": "1997-06-20",
      "genre_ids": [
        14,
        28,
        53,
        80,
        878
      ],
      "id": 415,
      "original_title": "Batman & Robin",
      "original_language": "en",
      "title": "Batman & Robin",
      "backdrop_path": "/h4tsxkwe0lRHBK1WHliNASK63IK.jpg",
      "popularity": 2.740055,
      "vote_count": 713,
      "video": false,
      "vote_average": 4.38
    },
    {
      "poster_path": "/6q754nf2DFAZMYfPZDJmnzAIcXE.jpg",
      "adult": false,
      "overview": "After the previous incident in Gotham City, it turns out the Joker isn't dead, and is still alive. As revenge on Batman, he seeks out to not only stop the Batman, but to find out who he truly is behind the mask.",
      "release_date": "2016-08-05",
      "genre_ids": [
        28,
        12
      ],
      "id": 397395,
      "original_title": "Batman Unveiled",
      "original_language": "en",
      "title": "Batman Unveiled",
      "backdrop_path": null,
      "popularity": 2.640946,
      "vote_count": 11,
      "video": false,
      "vote_average": 4.95
    },
    {
      "poster_path": "/ddN4llIRFVN7XVtbLpaE8RisAgH.jpg",
      "adult": false,
      "overview": "Batman intervenes in the life of a junkie.",
      "release_date": "2016-08-05",
      "genre_ids": [
        28,
        80,
        18
      ],
      "id": 404463,
      "original_title": "Batman: Dante",
      "original_language": "en",
      "title": "Batman: Dante",
      "backdrop_path": "/dnlWUcxsSotZzH5h4B3yavsUJFY.jpg",
      "popularity": 2.440432,
      "vote_count": 2,
      "video": false,
      "vote_average": 1.25
    },
    {
      "poster_path": "/eTMrHEhlFPHNxpqGwpGGTdAa0xV.jpg",
      "adult": false,
      "overview": "The Dark Knight of Gotham City confronts a dastardly duo: Two-Face and the Riddler. Formerly District Attorney Harvey Dent, Two-Face believes Batman caused the courtroom accident which left him disfigured on one side. And Edward Nygma, computer-genius and former employee of millionaire Bruce Wayne, is out to get the philanthropist; as The Riddler. Former circus acrobat Dick Grayson, his family killed by Two-Face, becomes Wayne's ward and Batman's new partner Robin.",
      "release_date": "1995-05-31",
      "genre_ids": [
        14
      ],
      "id": 414,
      "original_title": "Batman Forever",
      "original_language": "en",
      "title": "Batman Forever",
      "backdrop_path": "/gVTTtYgKIBurNvkGiGC6735b8y.jpg",
      "popularity": 2.332318,
      "vote_count": 763,
      "video": false,
      "vote_average": 5.26
    },
    {
      "poster_path": "/wPeorCnD9MRR2S9Dzh4OpIgNLiv.jpg",
      "adult": false,
      "overview": "Batman has stopped the reign of terror that The Mutants had cast upon his city.  Now an old foe wants a reunion and the government wants The Man of Steel to put a stop to Batman.",
      "release_date": "2013-01-18",
      "genre_ids": [
        16,
        28
      ],
      "id": 142061,
      "original_title": "Batman: The Dark Knight Returns, Part 2",
      "original_language": "en",
      "title": "Batman: The Dark Knight Returns, Part 2",
      "backdrop_path": "/wDWPuqhgZ0INvqHsyLa470xeabT.jpg",
      "popularity": 4.608291,
      "vote_count": 239,
      "video": false,
      "vote_average": 7.84
    },
    {
      "poster_path": "/gZb4h7aYRDzUsziErNyrPACo8wv.jpg",
      "adult": false,
      "overview": "Explore Bruce Wayne's transition from his beginning as a tormented vigilantee to The Dark Knight of a crumbling metropolis with six distinct chapters but intended to be viewed as a whole.",
      "release_date": "2008-07-03",
      "genre_ids": [
        16,
        28,
        12
      ],
      "id": 13851,
      "original_title": "Batman: Gotham Knight",
      "original_language": "en",
      "title": "Batman: Gotham Knight",
      "backdrop_path": "/cAW1NAahXhBUFJZgicBIGPs2OkZ.jpg",
      "popularity": 2.004404,
      "vote_count": 96,
      "video": false,
      "vote_average": 6.86
    },
    {
      "poster_path": "/zMY2QVCN9z6YH0eS32NOrSss0gb.jpg",
      "adult": false,
      "overview": "Behind the scenes documentary highlighting production design, props &amp; gadgets, batmobile/batsuit design, and the music of the 1989 Batman.",
      "release_date": "2005-07-04",
      "genre_ids": [],
      "id": 204649,
      "original_title": "Batman: Beyond Batman",
      "original_language": "en",
      "title": "Batman: Beyond Batman",
      "backdrop_path": null,
      "popularity": 1.0006,
      "vote_count": 3,
      "video": false,
      "vote_average": 7.33
    },
    {
      "poster_path": "/jY5DEgyMmHUh4AbWTu6pOb5g7vk.jpg",
      "adult": false,
      "overview": "Based on the hit video game series, Batman must find a bomb planted by the Joker while dealing with a mysterious team of villains called, The Suicide Squad.",
      "release_date": "2014-08-12",
      "genre_ids": [
        53,
        16,
        28,
        80
      ],
      "id": 242643,
      "original_title": "Batman: Assault on Arkham",
      "original_language": "en",
      "title": "Batman: Assault on Arkham",
      "backdrop_path": "/jRGKbaBcsb7mfqLeLpBxPe1Mufc.jpg",
      "popularity": 1.798443,
      "vote_count": 160,
      "video": false,
      "vote_average": 7.33
    },
    {
      "poster_path": "/t1UAqk1Yej8rfxEUqNLFyKkcny1.jpg",
      "adult": false,
      "overview": "Batman has not been seen for ten years. A new breed of criminal ravages Gotham City, forcing 55-year-old Bruce Wayne back into the cape and cowl. But, does he still have what it takes to fight crime in a new era?",
      "release_date": "2012-09-06",
      "genre_ids": [
        28,
        16
      ],
      "id": 123025,
      "original_title": "Batman: The Dark Knight Returns, Part 1",
      "original_language": "en",
      "title": "Batman: The Dark Knight Returns, Part 1",
      "backdrop_path": "/a6pB1w4lwp0WeTRQk9Q2K1F9W34.jpg",
      "popularity": 3.183682,
      "vote_count": 226,
      "video": false,
      "vote_average": 7.61
    },
    {
      "poster_path": "/3KsZUcifrnHqs6AGrZBW4iUTLYs.jpg",
      "adult": false,
      "overview": "Batman learns that he has a violent, unruly pre-teen son with Talia al Ghul named Damian Wayne who is secretly being raised by Ra's al Ghul and the League of Assassins. When Ra's al Ghul apparently dies after a battle with Deathstroke, Batman must work to stop his long-lost son from taking revenge and guiding him to a righteous path, in addition to the chance for the pair to truly acknowledging each other as family.",
      "release_date": "2014-04-20",
      "genre_ids": [
        16,
        28,
        12
      ],
      "id": 251519,
      "original_title": "Son of Batman",
      "original_language": "en",
      "title": "Son of Batman",
      "backdrop_path": "/omK35Mr3oks6bd5efrgsO7CzmLP.jpg",
      "popularity": 1.708839,
      "vote_count": 198,
      "video": false,
      "vote_average": 6.9
    },
    {
      "poster_path": "/sWa1Y5QhGuJMjw8uuFoggGLqZ0y.jpg",
      "adult": false,
      "overview": "An evil syndicate is set to conquer the world, and the mission is to stop them from fulfilling their viscious plans. The consequences of their failure may mean the destruction of all dissenting countries who stand in their way. All countries must bow to their power before the deadline of five days expires. The solution is sending in their best operatives; James Hika, and the dynamic duo of Batman and Robin. They are first detested with working with each other, but for the safety of the world, they join forces. Through thick and thin, they survive the syndicate's plan to dispose of them. They get closer to stopping the syndicate plan, but there is a traitor in their midst. Will this deter them from achieving their goal?",
      "release_date": "1966-10-26",
      "genre_ids": [
        28,
        12,
        35,
        878
      ],
      "id": 138757,
      "original_title": "James Batman",
      "original_language": "en",
      "title": "James Batman",
      "backdrop_path": "/xSC5TtaGgL3dggKPfZKuWPUg3V4.jpg",
      "popularity": 1.000348,
      "vote_count": 0,
      "video": false,
      "vote_average": 0
    },
    {
      "poster_path": "/xp65MaH8bycr5v14f8jPO2NEXlX.jpg",
      "adult": false,
      "overview": "Bruce Wayne is missing. Alfred covers for him while Nightwing and Robin patrol Gotham City in his stead. And a new player, Batwoman, investigates Batman's disappearance.",
      "release_date": "2016-03-22",
      "genre_ids": [
        28,
        16,
        878
      ],
      "id": 366924,
      "original_title": "Batman: Bad Blood",
      "original_language": "en",
      "title": "Batman: Bad Blood",
      "backdrop_path": "/hqZH0QX5uAcj0AXaPzW4cQiXsSQ.jpg",
      "popularity": 1.624158,
      "vote_count": 83,
      "video": false,
      "vote_average": 6.18
    },
    {
      "poster_path": "/bI1YVuhBN6Vws1GP9Mf01DyhC2s.jpg",
      "adult": false,
      "overview": "Two men come to Gotham City: Bruce Wayne after years abroad feeding his lifelong obsession for justice and Jim Gordon after being too honest a cop with the wrong people elsewhere. After learning painful lessons about the city's corruption on its streets and police department respectively, this pair learn how to fight back their own way. With that, Gotham's evildoers from top to bottom are terrorized by the mysterious Batman and the equally heroic Gordon is assigned to catch him by comrades who both hate and fear him themselves. In the ensuing manhunt, both find much in common as the seeds of an unexpected friendship are laid with additional friends and rivals helping to start the legend.",
      "release_date": "2011-09-27",
      "genre_ids": [
        28,
        12,
        16,
        878,
        80
      ],
      "id": 69735,
      "original_title": "Batman: Year One",
      "original_language": "en",
      "title": "Batman: Year One",
      "backdrop_path": "/hAhMOPPPxzCKsCu5rUMYdwS8Yb5.jpg",
      "popularity": 1.5937,
      "vote_count": 148,
      "video": false,
      "vote_average": 7.15
    }
  ],
  "total_results": 80,
  "total_pages": 4
}
```
