export interface IDetteListe{
    id_dette?:number;
    date_dette?:string;
    nom_client?:string;
    telephone_client?:string;
    montant_dette?:number;
}

export interface IClient{
    adresse?:string;
    create_at?:string;
    email?:string;
    id?:number;
    nom?:string;
    password?:string;
    photo?:string;
    prenom?:string;
    telephone?:string;
    update_at?:string;
}

export interface IArticleUnite{
    article_id?:number;
    create_at?:string;
    libelle?:string;
    id?:number;
    unite_id?:number;
    update_at?:string;
}

export interface IArticle{
    categorie_id?:number;
    create_at?:string;
    description?:string;
    id?:number;
    libelle?:string;
    update_at?:string;
}

export interface ICategorie{
    create_at?:string;
    id?:number;
    libelle?:string;
    update_at?:string;
}

export interface IStock{
    article_id?:number;
    create_at?:string;
    id?:number;
    piece_par_boite?:number;
    prix_boite?:number;
    prix_unitaire?:number;
    quantite_boites?:number;
    quantite_pieces?:number;
    update_at?:string;
}

export interface IUnite{
    create_at?:string;
    id?:number;
    libelle?:string;
    update_at?:string;
}

export interface IAddVenteLoadData{
    clients?: IClient[];
    article_unites?: IArticleUnite[];
    articles?: IArticle[];
    categories?: ICategorie[];
    stocks?: IStock[];
    unites?: IUnite[];
}


export interface IArticleVenteSend{
    article?:string;
    categorie?:string;
    prixUnitaire?:string;
    quantite?:string;
    unite?:string;
}

export interface IVenteDataSend{
    nom?: string;
    prenom?: string;
    telephone?: string;
    adresse?: string;
    email?: string;
    articles?: IArticleVenteSend[];
    dette?:string;
    montantTotal?:string;
}

export interface IListDetteLoadData{
    dettes?: IDetteListe[];
}