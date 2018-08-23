import { AuctionService } from './../../core/services/auction.service';
import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

import { Auction } from 'src/app/core/models/Auction';

@Component({
  selector: 'app-auction-detail',
  templateUrl: './auction-detail.component.html',
  styleUrls: ['./auction-detail.component.scss']
})
export class AuctionDetailComponent implements OnInit {
  public auction: Auction;

  constructor(private _auctionService: AuctionService, private route: ActivatedRoute) { }

  ngOnInit() {
    const id = this.route.snapshot.params['id'];
    this.getAuctionById(id);
  }

  getAuctionById(id: number) {
    this._auctionService.getAuctionById(id).subscribe(
      data => {
        this.auction = data;
        console.log(data);
      },
      err => {
        console.log(err);
      },
      () => {
        console.log('Auction by Id fetched');
      }
    );
  }
}
