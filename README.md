# PHP UK 2023
Code for my TDD workshop at the PHP UK Conference 2023

## Workshop 1: Stack - Abstract Data Type
Together we will implement a [Stack](src/ADT/Stack.php) (Last In, Last Out) to the
[Collection Interface](src/ADT/Collection.php).

## Lab 1: Queue - Abstract Data Type
Individually or in pairs implement a [Queue](src/ADT/Queue.php) (First In, First Out) to the
[Collection Interface](src/ADT/Collection.php)

[Video](https://youtu.be/04FzlrMKPTM)

## Lab 2: Driving License Number Generator (Test Double)

Implement a class that will generate a driving licence number for a LicenceApplicant. An applicant must be 17 or older 
to request a Licence number. The generate function should throw an InvalidDriverException. 

A driving licence number must be 15 characters long. It should be made up of the following pieces of information

`[applicate initial][applicant DOB (Format:DDMMYYYY)][RandomNumbers]`

e.g 
  - John Smith Smithson, Born 14/04/2000 would have a driving licence number of `jss140420001111`
  - John Smithson, Born 14/04/2000 would have a driving licence number of `js1404200011111`

### Mockery Documentation
- [Mocks Documentation](http://docs.mockery.io/en/latest/reference/creating_test_doubles.html)
- [Spies Documentation](http://docs.mockery.io/en/latest/reference/spies.html)


- [Stubs Video](https://youtu.be/F9TlJOevrfw)
- [Spies Video](https://youtu.be/byszcqvIG3U)
- [Mocks Video](https://youtu.be/KaUdUTtyDSc)
- [Fakes Video](https://youtu.be/aIMLaKtT828)
- [Isolating Unit Tests](https://youtu.be/H5XbK91ncx0)

## Lab III: Roman Numeral Converter

Implement a function that converts Arabic Number to [Roman Numerals](https://www.mathsisfun.com/roman-numerals.html)

The function should be able to convert any number between 1 and 4000 to a Roman Numeral