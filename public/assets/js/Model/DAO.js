export class DAO {
    url;
    constructor(init) {
        Object.assign(this, init);
        this.url = "http://www.cheikh.ibrahima.dieng:8120/api";
    }
    setUrl(url) {
        this.url = url;
    }
    buildQueryParams(params) {
        const queryParams = new URLSearchParams();
        for (const key in params) {
            if (params.hasOwnProperty(key)) {
                queryParams.append(key, params[key]);
            }
        }
        return queryParams.toString();
    }
    getData(params) {
        const queryString = params ? `?${this.buildQueryParams(params)}` : '';
        return fetch(`${this.url}${queryString}`, {
            method: 'GET',
        }).then(response => response.json()).catch(error => error);
    }
    postData(db) {
        return fetch(this.url, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(db)
        }).then(response => response.json()).catch(error => error);
    }
}
