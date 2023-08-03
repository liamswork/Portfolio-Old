//Acquire the content of the banner text p tag. This is dynamic and will change from page to page. Split it into a charArray.
const textElement = $('.banner-text p');
const textContent = $('.banner-text p').text();
const charArray = textContent.split('');
let currentText = [];

textElement.text(charArray[0]); //Placeholder character to keep size of text box. Empty would move larger banner above.
for(let i = 0; i < charArray.length; i++){
    setTimeout(function() {
        currentText.push(charArray[i]);
        textElement.text(currentText.join(''));
      }, (i + 1) * 200);
}

//STRETCH GOALS--
//DELETE TEXT WITH POP, AND USE A BOOLEAN CONDITIONAL TO CHECK IF WE'RE DELETING LETTERS, IF WE REACH 0 ON LENGTH


