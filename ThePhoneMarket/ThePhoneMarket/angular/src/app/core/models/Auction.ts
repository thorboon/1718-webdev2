export class Auction {
    id: number;
    user: Object;
    category: Object;
    title: string;
    description: string;
    dimensions: string;
    condition: string;
    shipment: string;
    price: number;
    min_bid: number;
    isBoosted: boolean;
    timer: Date;
}
