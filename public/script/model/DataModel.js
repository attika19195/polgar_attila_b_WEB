class DataModel {
    #list = [];

    constructor() {

    }

    dataIn(endpoint, myCallBack) {
        fetch(endpoint, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            }
        })
            .then((response) => response.json())
            .then((data) => {
                this.#list = data;
                myCallBack(this.#list);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
}

export default DataModel;
