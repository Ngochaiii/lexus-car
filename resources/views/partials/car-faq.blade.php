{{-- FAQ hiển thị trên trang — dùng chung mảng $faq với FAQPage schema để nội dung luôn khớp --}}
@if (!empty($faq))
    <section class="car-faq-section" id="faq" aria-labelledby="car-faq-title">
        <div class="container">
            <div class="section-tag">Giải đáp</div>
            <h2 class="section-title" id="car-faq-title">Câu Hỏi Thường Gặp Về {{ $car['name'] }}</h2>
            <div class="car-faq-list">
                @foreach ($faq as $i => $item)
                    <details class="car-faq-item" @if ($i === 0) open @endif>
                        <summary>{{ $item['question'] }}</summary>
                        <p>{{ $item['answer'] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    @once
        @push('css')
            <style>
                .car-faq-section { padding: 80px 0; background: var(--lexus-black); }
                .car-faq-list { max-width: 860px; margin-top: 32px; }
                .car-faq-item { border-bottom: 1px solid var(--lexus-gray); padding: 18px 0; }
                .car-faq-item summary { cursor: pointer; list-style: none; font-weight: 600; font-size: 1.05rem; color: var(--lexus-white); display: flex; justify-content: space-between; gap: 16px; }
                .car-faq-item summary::-webkit-details-marker { display: none; }
                .car-faq-item summary::after { content: '+'; color: var(--lexus-gold); font-size: 1.4rem; line-height: 1; transition: var(--transition); }
                .car-faq-item[open] summary::after { transform: rotate(45deg); }
                .car-faq-item p { margin: 12px 0 0; color: var(--lexus-text); line-height: 1.7; }
            </style>
        @endpush
    @endonce
@endif
