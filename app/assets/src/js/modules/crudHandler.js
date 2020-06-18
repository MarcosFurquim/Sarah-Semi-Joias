crudHandler = {};
this = crudHandler;
initVars = () => {
    this.formRevendedor = document.querySelector("#form-novo-revendedor");
}

listenersHandler = () => {
    const listenerForm = (event) => {
        console.log('event',event);
        event.preventDefault();
        event.stopPropagation();
        console.log('this',this);
    }
    this.formRevendedor.addEventListner('submit',listenerForm(event));
}

initVars();
listenersHandler();


module.exports = crudHandler;