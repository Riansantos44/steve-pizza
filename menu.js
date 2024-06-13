
let CurrentActive;

const setup = () => {

    document.getElementById('pizza').addEventListener('click', pizzaHandler);
    document.getElementById('salads').addEventListener('click', saladsHandler);
    document.getElementById('starter').addEventListener('click', starterHandler);

    GeneralHandler('pizza', pizzaTemplate);

};

const pizzaHandler = () => {
    GeneralHandler('pizza', pizzaTemplate);
};

const saladsHandler = () => {
    GeneralHandler('salads', saladsTemplate);
};

const starterHandler = () => {
    GeneralHandler('starter', starterTemplate);
};

const GeneralHandler = (idName, arrTemplate) => {

    if (CurrentActive !== idName) {
        apagaHTML();
        renderHtml(idName, arrTemplate);
        CurrentActive = attActive(idName);
    }

};

const apagaHTML = () => {
    document.querySelector('.content-box').textContent = '';
};

const renderHtml = (idName, arrTemplate) => {

    arrTemplate.forEach( el => {

        const markup = `    
            <div class="content">
                <span class="content__price-box">$${el.price.toFixed(2)}</span>

                <h3 class="content__item-name">${el.name} ${ el.greyBox ? `<span class="content__grey-box">${el.text}</span>` : '' } ${ el.redBox ? '<span class="content__red-box">HOT!</span>'  : '' } </h3>
                <p class="content__item-description">${el.description}</p>
            </div>
        `;

        document.querySelector('.content-box').insertAdjacentHTML('beforeend', markup);
    });
};


const attActive = (idName) => {
    let ArrButtons = Array.from(document.querySelectorAll('.menu__button'));

    ArrButtons.forEach(el => {
        el.classList.remove('active');

        if (el.id === idName)
            el.classList.add('active');

    });

    return idName;
};


class Template {
    constructor(name, description, price, greyBox, redBox, text) {
        this.name = name;
        this.description = description;
        this.price = price;
        this.greyBox = greyBox;
        this.redBox = redBox;
        
        if(this.greyBox) {
            this.text = text;
        }
    }
}


const pizzaTemplate = [
    new Template('Margherita', 'FRESH TOMATOES, FRESH MOZZARELLA, FRESH BASIL,', 12.50, false, false),
    new Template('Formaggio', 'FOUR CHEESES (MOZZARELLA, PARMESAN, PECORINO, JARLSBERG)', 15.50, false, false),
    new Template('Chicken', 'FRESH TOMATOES, MOZZARELLA, CHICKEN, ONIONS', 17.00, false, false),
    new Template("Pineapple'o'clock", 'FRESH TOMATOES, MOZZARELLA, FRESH PINEAPPLE, BACON, FRESH BASIL', 16.50, false, false),
   

]


setup();