<script>
export default {
    name: 'Calculator',
    props: {
        price: {
            type: String,
        },
        sizes: {
            type: String,
        },
    },
    data() {
        return {
            quantity: 1,
            chosenSize: JSON.parse(this.sizes)[0].value,
        }
    },

    computed: {
        computedPrice: function() {
            return this.price * this.chosenSize * this.quantity;
        }
    },
};
</script>

<template>
    <div>
        <label>
            Size
            <select v-model="chosenSize">
                <option v-for="size in JSON.parse(sizes)" v-bind:value="size.value">
                    {{ size.label }}
                </option>
            </select>
        </label>

        <div class="grid-x">
            <div class="small-3 cell">
                <label for="middle-label" class="middle">Quantity</label>
            </div>
            <div class="small-9 cell">
                <input v-model="quantity" type="text" id="middle-label" placeholder="1">
            </div>
        </div>

        <h4>Product price: <strong>{{ computedPrice }}</strong> zł</h4></div>
</template>
