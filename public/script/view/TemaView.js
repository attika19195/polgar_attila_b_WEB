class TemaView {
    #elem;
    constructor(elem, szuloElem) {
        this.#elem = elem;
        szuloElem.append(`
        <option id="temaValaszto${elem.id}">${elem.temanev}</option>
        `);

        this.temaMegjelenit=$(`#temaValaszto${elem.id}`);

        this.temaMegjelenit.on("click", ()=> 
        {
            szuloElem.children().removeClass('active');
            this.temaMegjelenit.addClass('active');

            this.kattintasTrigger("temaValaszto")
        });


    }

    kattintasTrigger(esemenyNeve)
        {
            const esemeny = new CustomEvent(esemenyNeve, {detail:this.#elem.id});
            window.dispatchEvent(esemeny);
        }


}

export default TemaView;
