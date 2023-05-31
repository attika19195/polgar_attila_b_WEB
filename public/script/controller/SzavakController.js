import DataModell from "../model/DataModel.js";
import SzavakView from "../view/SzavakView.js";

class SzavakController{
    constructor(){
        const datamodell = new DataModell();
        console.log("SzavakController")
        datamodell.dataIn('/api/szavak', this.szavakMegjelenitese);
    }

    szavakMegjelenitese(szavak){
        let szuloElem=$(".szavak_article");
        szuloElem.empty()
        szavak.forEach(szo => {
            new SzavakView(szo, szuloElem);
        });
    }

}

export default SzavakController;