import { AuctionService } from 'src/app/core/services/auction.service';
import { Component, OnInit, Input } from '@angular/core';
import { Auction } from 'src/app/core/models/Auction';

@Component({
  selector: 'app-auction-list',
  templateUrl: './auction-list.component.html',
  styleUrls: ['./auction-list.component.scss']
})
export class AuctionListComponent implements OnInit {
  public auctions: Auction[];

  constructor(private _auctionService: AuctionService) { }

  ngOnInit() {
    this.getAuctions();
  }

  getAuctions() {
    return this._auctionService.getAuctions().subscribe(
      data => {
        this.auctions = data;
        console.log(this.auctions);
      },
      err => console.log(err),
      () => console.log('Auctions fetched')
     );
  }
}
