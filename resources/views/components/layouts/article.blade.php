<article 
    class="{{ 
        $notProse ? '' 
        :  'prose prose-lg md:prose-xl 
            prose-headings:mb-1.5 prose-lead:mb-0 prose-p:leading-normal prose-p:mt-2 
            prose-a:font-bold prose-a:text-primary hover:prose-a:text-primary-dark 
            prose-ul:leading-normal prose-ul:mt-2 prose-ul:mb-0 prose-ul:ml-0 
            prose-ol:leading-normal prose-ol:mt-2 prose-ol:mb-0 prose-ol:ml-0
            max-w-none'  
    }}"
>
    {{ $slot }}
</article>