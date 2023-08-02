<x-layouts.section-narrow>
    <div class="w-2xl mx-auto">
        <div x-data="{
            employees: 0, support: false, ppe: 50, s: 1900, ms: 220, price: 0,
            calcPrice()
            {
                price = this.s + (this.employees * this.ppe);
                
                if( this.support == true ) {
                    price += (this.employees / 10 * this.ms);
                }

                return Math.round(price);
            }
        }">
            <div class="">
                <div>
                    <label for="employees" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">How many employees do you have?</label>
                    <input x-model.number="employees" x-on:click="calcPrice()" value="0" type="integer" name="employees" id="employees" placeholder="No of Employees" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                
                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">What help do you need?</span>
                support value: <span x-text="support"></span>
                price value: <span x-text="price"></span>
                <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                    <input x-model="support" value="true" id="support" type="radio" value="" name="support" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="support" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">YES, I want an outsourced Chief People Officer</label>
                    <input x-model="support" value="false" id="support" type="radio" name="support" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="monthly" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">NO, I'll do this all in-house</label>
                </div>
            </div>
           
            <div>
                <span x-show="(employees > 0)">
                    One-off Price: £<span x-text="calcPrice()"></span>
                    Monthly Price: £<span x-text="Math.round(price * 1.125 / 12)"></span>
                </span>
            </div>
            
        </div>

    </div>
</x-layouts.section-narrow>
