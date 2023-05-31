import DataModell from "../model/DataModel.js";
import TemaView from "../view/TemaView.js";
import SzavakController from "../controller/SzavakController.js";

class TemaController{
    constructor(){
        const datamodell = new DataModell();
        const szavakController = new SzavakController();
        console.log("TemaController")
        datamodell.dataIn('/api/tema', this.temakMegjelenitese);

        $(window).on('temaValaszto', (event)=>{
            this.temaSzavak=`/api/szavak/tema/${event.detail}`;
            adatmodell.adatBe(this.temaSzavak, szavakController.szavakMegjelenitese);
         })
    }

    temakMegjelenitese(temak){
        let szuloElem=$(".temak_article");
        szuloElem.empty()
        temak.forEach(tema => {
            new TemaView(tema, szuloElem);
        });
    }

}

export default TemaController;