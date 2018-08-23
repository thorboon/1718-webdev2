import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';

import { HeaderComponent } from './components/header/header.component';
import { AuctionListComponent } from './../auctions/auction-list/auction-list.component';
import { CategoryCardComponent } from './category/category-card/category-card.component';
import { FooterComponent } from './components/footer/footer.component';
import { SearchComponent } from './components/search/search.component';

@NgModule({
  declarations: [
    HeaderComponent,
    AuctionListComponent,
    SearchComponent,
    CategoryCardComponent,
    FooterComponent
  ],
  imports: [
    CommonModule,
    RouterModule
  ],
  exports: [
    HeaderComponent,
    AuctionListComponent,
    CategoryCardComponent,
    FooterComponent
  ],
  providers: []
})
export class CoreModule { }
