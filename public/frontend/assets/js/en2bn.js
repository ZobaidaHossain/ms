const toBn = n => n.replace(/\d/g, d => "০১২৩৪৫৬৭৮৯"[d])

// Tests
// console.log(toBn("6789.89"));                 //৬৭৮৯.৮৯
// console.log(toBn("The Number is: 6789.89"));  //The Number is: ৬৭৮৯.৮৯
// console.log(toBn("0123456789.89"));           //০১২৩৪৫৬৭৮৯.৮৯
// console.log(toBn("0123456789"));              //০১২৩৪৫৬৭৮৯
// console.log(toBn("1234"));    