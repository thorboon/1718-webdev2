import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AuctionRowComponent } from './auction-row.component';

describe('AuctionRowComponent', () => {
  let component: AuctionRowComponent;
  let fixture: ComponentFixture<AuctionRowComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AuctionRowComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AuctionRowComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
