import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import { Auction } from 'src/app/core/models/Auction';

import { environment } from './../../../environments/environment';


@Injectable({
  providedIn: 'root'
})

export class AuctionService {
  private API_URL = `${environment.api.url}`;

  constructor(private http: HttpClient) { }

  getAuctions() {
    return this.http.get<Auction[]>(this.API_URL + '/auctions');
  }

  getAuctionById(id: number) {
    return this.http.get<Auction>(this.API_URL + '/auctions/' + id);
  }

  create(auction: Auction) {
    return this.http.post(this.API_URL + '/auctions', auction);
  }

  update(auction: Auction) {
    return this.http.put(this.API_URL + '/auctions/' + auction.id, auction);
  }

  delete(id: number) {
    return this.http.delete(this.API_URL + '/auctions/' + id);
  }
}
