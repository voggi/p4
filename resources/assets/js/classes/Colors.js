class Colors {
    constructor() {
        this.colors = ['#a6cee3','#1f78b4','#b2df8a','#33a02c','#fb9a99','#e31a1c','#fdbf6f','#ff7f00','#cab2d6','#6a3d9a','#ffff99','#b15928'];

        this.index = this.colors.length - 1;

        this.white = '#ffffff';
    }

    next() {
        if (this.index === this.colors.length - 1) {
            this.index = 0;
        } else {
            this.index = this.index + 1;
        }
        
        return this.colors[this.index];
    }

    current() {
        return this.colors[this.index];
    }
}

export default Colors;