# PHP UK 2023
Code for my TDD workshop at the PHP UK Conference 2023

## Workshop 1: Stack - Abstract Data Type
Together we will implement a [Stack](src/ADT/Stack.php) (Last In, Last Out) to the
[Collection Interface](src/ADT/Collection.php).

## Lab 1: Queue - Abstract Data Type
Individually or in pairs implement a [Queue](src/ADT/Queue.php) (First In, First Out) to the
[Collection Interface](src/ADT/Collection.php)

[Video](https://youtu.be/04FzlrMKPTM)

## Lab 2: Bowling Game Score Calculator
Individually or in pairs implement a score function in the [Bowling Game Class](src/Bowling/Game.php). The function
`score()` will take a string representation of a single game of Bowling

e.g.
```text
44 34 9/ X 13 -1 8- 53 -9 X4/
```

The function will return the score for the game.

### Rules of Bowling
The game consists of 10 frames. In each frame the player has two rolls to knock down 10 pins. The score for the frame is
the total number of pins knocked down, plus bonuses for strikes and spares.

A spare is when the player knocks down all 10 pins in two rolls. The bonus for that frame is the number of pins knocked
down by the next roll.

A strike is when the player knocks down all 10 pins on his first roll. The frame is then completed with a single roll.
The bonus for that frame is the value of the next two rolls.

In the tenth frame a player who rolls a spare or strike is allowed to roll the extra balls to complete the frame.
However no more than three balls can be rolled in tenth frame.

This [Bowling Game Calculator](https://www.bowlinggenius.com/) may be useful to experiment with how the scoring works

[Video](https://youtu.be/5FKL4Gyj-Y0)

## Lab 3: Driving License Number Generator (Test Double)

TODO: Write up requirements

- [Mocks Documentation](http://docs.mockery.io/en/latest/reference/creating_test_doubles.html)
- [Spies Documentation](http://docs.mockery.io/en/latest/reference/spies.html)


- [Stubs Video](https://youtu.be/F9TlJOevrfw)
- [Spies Video](https://youtu.be/byszcqvIG3U)
- [Mocks Video](https://youtu.be/KaUdUTtyDSc)
- [Fakes Video](https://youtu.be/aIMLaKtT828)
- [Isolating Unit Tests](https://youtu.be/H5XbK91ncx0)