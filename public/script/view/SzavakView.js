class SzavakView {
    #elem;
    constructor(elem, szuloElem) {
        this.#elem = elem;
        szuloElem.append(`
        <div class="row">
            <p>${elem.angol}</p>
            <form id= '${elem.magyar}' class= 'inputMezo' action="/action_page.php">
            <input type="text" id="fname" name="fname"><br><br>
            </form>
            <p></p>
        </div>
        `);


    }


}

export default SzavakView;